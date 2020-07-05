@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-3/4 md:mx-auto m-auto">

            @if (session('success'))
              <div class="text-sm border text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('success') }}
              </div>
            @endif

            @if (session('error'))
              <div class="text-sm border text-red-700 border-red-600 bg-red-100 px-3 py-4 mb-4" role="alert">
                {{ session('error') }}
              </div>
            @endif

            <div class="flex flex-col">
              <div class="font-semibold bg-blue-900 text-white py-3 px-6 mb-8">
                <span class="block lg:inline-block py-2 px-2">All categories</span>
                <a href="{{ url('panel/categories/new') }}" class="text-sm hover:bg-white hover:text-blue-900 border py-2 px-2 float-left lg:float-right cursor-pointer block lg:inline-block">New category</a>
              </div>
              <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full overflow-hidden border-b border-gray-200">

                  <table id="table" class="min-w-full display responsive table table-striped">
                    <thead>
                      <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                      <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Description</th>
                      <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
                      <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Options</th>
                    </thead>
                    <tbody class="bg-gray-200">
                      @foreach ($categories as $category)
                        <tr>
                          <td>
                            <span class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-800">
                              {{ $category->name }}
                            </span>
                          </td>
                          <td>
                            <span class="py-4 border-b border-gray-200 text-gray-800">
                              {{ $category->description }}
                            </span>
                          </td>
                          <td>
                            <span class="py-4 border-b border-gray-200 text-gray-800">
                              {{ $category->status == 0 ? 'Inactive' : 'Active' }}
                            </span>
                          </td>
                          <td>
                            <div class="px-6 py-4">
                              <a href="{{ url('panel/categories/edit/'.$category->id.'') }}" class="block cursor-pointer bg-blue-900 px-3 py-1 text-sm font-semibold text-white mr-2 mb-2 text-center hover:bg-blue-800 ">Edit</a>
                              <a delete-data="{{ url('panel/categories/delete/'.$category->id.'') }}" class="block cursor-pointer bg-red-700 px-3 py-1 text-sm font-semibold text-white mr-2 mb-2 text-center hover:bg-red-600 delete_record">Delete</a>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection