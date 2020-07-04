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
      <div class="mx-auto bg-purple-300 p-5">
        <nav class="flex-row md:justify-between">
            <div class="flex flex-row justify-between">
               <a href="#">Logo</a>
    
               <p id="hamburgerbtn" class="md:hidden bg-purple-800">
                 menu
               </p>
            </div>
           
            <ul class="hidden md:flex md:flex-row" id="mobileMenu">
                <li class="pr-5"><a> Services </a></li>
                <li class="pr-5"><a>Porfolio</a></li>
                <li class="pr-5"><a>About</a></li>
                <li><a>Contact</a></li>
            </ul>
        </nav>
    </div>

        @yield('content')
    </div>
</body>
</html>
