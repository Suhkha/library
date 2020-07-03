@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-3/4 md:mx-auto">
            <div class="flex flex-col">
              <div class="font-semibold bg-blue-900 text-white py-3 px-6 mb-8">
                <span class="block lg:inline-block py-2 px-2">New author</span>
                <a href="{{ url('panel/authors') }}" class="text-sm hover:bg-white hover:text-blue-900 border py-2 px-2 float-left lg:float-right cursor-pointer block lg:inline-block">View authors</a>
              </div>
              <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full overflow-hidden border-b border-gray-200">
                  <form id="validate_form" class="w-full px-8 m-auto" method="POST" action={{ route('panel.authors.update', ['id' => $author->id]) }}>
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="author-name">
                          Author name
                        </label>
                      <input required class="form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Arthur Conan Doyle" name="name" value="{{ $author->name }}">
                      </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="status">
                          Is it an active author?
                        </label>
                        <div class="mt-2">
                          <label class="block items-center">
                            <input type="checkbox" class="form-checkbox" name="status" value="1" {{ $author->status == 0 ? '' : 'checked'}}>
                            <span class="ml-2">Yes</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <input type="submit" class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 float-right focus:outline-none focus:shadow-outline cursor-pointer" value="Save"/>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection