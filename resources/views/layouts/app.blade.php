<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <nav class="bg-blue-900 shadow mb-8 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-end lg:items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        @guest
                        <span class="text-sm text-white ml-4">Library system</span>
                        @else
                          @if(Auth::user()->type == 1)
                            <div class="text-sm block lg:inline-block mt-3 lg:ml-4 lg:mt-auto">
                              <a href="{{ url('panel/users') }}" class="mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-1 mt-3 lg:mr-4">
                                Users
                              </a>
                              <a href="{{ url('panel/categories') }}" class="mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-1 mt-3 lg:mr-4">
                                Categories
                              </a>
                              <a href="{{ url('panel/authors') }}" class="mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-1 mt-3 lg:mr-4">
                                Authors
                              </a>
                              <a href="{{ url('panel/books') }}" class="mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-1 mt-3 lg:mr-4">
                                Books
                              </a>
                            </div>
                          @else
                          <span class="text-sm ml-4 text-white">Coming soon...</span>
                          @endif
                        @endguest 
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span class="text-gray-300 text-sm pr-4 hidden lg:inline-block">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}" class="no-underline hover:underline text-gray-300 text-sm pr-3 lg:p-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</body>
</html>
