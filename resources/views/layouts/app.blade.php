<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
        <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
        <script src="{{asset('datatable/datatables.js')}}"></script>
        



    </head>
    <body class="font-sans antialiased">
       <div class="flex">
        <div class="w-56 h-screen bg-blue-800 shadow-lg flex justify-center ">
            <div class="menu flex items-center justify-center">
                <div class="flex flex-col">
                <a href="/dashboard" class="text-20 text-white m-3 border-b-2 hover:text-black w-100">Dashboard</a>
                <a href="/Category" class="text-20 text-white m-3">Categories</a>
                <a href="/Products" class="text-20 text-white m-3">Products</a>
                <a href="/gallery" class="text-20 text-white m-3">Gallery</a>
                <a href="/logout" class="text-20 text-white m-3">Logout</a>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-gray-200 p-10">
            @yield('content')

        </div>
                
       </div>
    </body>
</html>
