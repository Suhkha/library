<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
  <nav class="bg-blue-900 shadow mb-8 py-6 px-6">
    <div class="container mx-auto px-6 md:px-0">
        <div class="flex items-end">
            <div class="mr-6">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                  {{ config('app.name', 'Laravel') }}
                </a>
                <span class="text-sm text-white ml-4">Library system</span>
            </div>
        </div>
    </div>
</nav>
<div class="flex flex-col">
    <div class="max-w-sm rounded overflow-hidden shadow-lg m-auto my-12">
      <img class="w-full" src="https://media.giphy.com/media/EyYYkV1bqr8Mo/giphy.gif" alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Library system</div>
        <p class="text-gray-700 text-base">
          This panel is for administrators only but you can register and we will notify you when access to users is ready.
        </p>
      </div>
      <div class="px-6 py-4">
        <a href="{{ route('login') }}" class="inline-block bg-blue-900 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2">Admin Login</a>
        <a href="{{ route('register') }}" class="inline-block bg-blue-900 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2">User Register</a>
      </div>
    </div>
</div>
</body>
</html>
