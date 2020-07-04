@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-3/4 md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col">
              <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full overflow-hidden border-b border-gray-200">

                  <table id="table" class="min-w-full">
                    <thead>
                      <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                      <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                      <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Book assigned</th>
                      <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Options</th>
                    </thead>
                    <tbody class="bg-gray-200">
                      @foreach ($users as $user)
                        <tr>
                          <td>
                            <span class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-800">
                              {{ $user->name }}
                            </span>
                          </td>
                          <td>
                            <span class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-800">
                              {{ $user->email }}
                            </span>
                          </td>
                          <td>
                            <span class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-800">
                              @if(isset($user->book))
                                {{$user->book->name}}
                              @else
                                -
                              @endif
                            </span>
                          </td>
                          <td>
                            <span class="px-6 py-4">
                              @if(isset($user->book))
                                <a update-data="{{ url('panel/borrowed/status/'.$user->book->id.'/1') }}" class="update_record block cursor-pointer bg-green-900 px-3 py-1 text-sm font-semibold text-white mr-2 mb-2 text-center hover:bg-green-800 ">Available book</a>
                              @else
                                -
                              @endif
                            </span>
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