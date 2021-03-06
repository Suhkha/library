@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-3/4 md:mx-auto m-auto">
            <div class="flex flex-col">
              <div class="font-semibold bg-blue-900 text-white py-3 px-6 mb-8">
                <span class="block lg:inline-block py-2 px-2">Request book: {{ $book->name }}</span>
                <a href="{{ url('panel/books') }}" class="text-sm hover:bg-white hover:text-blue-900 border py-2 px-2 float-left lg:float-right cursor-pointer block lg:inline-block">View books</a>
              </div>
              <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full overflow-hidden border-b border-gray-200">
                  <form id="validate_form" class="w-full px-8 m-auto" method="POST" action={{ route('panel.borrowed.assigned_book', ['id' => $book->id]) }}>
                    @csrf
                    
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                          Select user
                        </label>
                        <div class="inline-block relative w-64">
                          <select required class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="categories" name="user_id">
                            <option>Select</option>
                            @foreach($users as $user)
                              <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
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