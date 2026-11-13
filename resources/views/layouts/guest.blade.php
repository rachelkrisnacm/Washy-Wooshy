<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Washy-Wooshy - Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts & Tailwind bawaan -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Memanggil file dari public/css/login.css -->
        <link rel="stylesheet" href="{{ asset('css/login.css') }}?v={{ time() }}">
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            
            <!-- LOGO WASHY-WOOSHY MENGGANTIKAN LOGO LARAVEL -->
            <div class="ww-logo-wrapper">
                <a href="/">
<img src="{{ asset('css/logowashywooshy.png') }}" alt="Logo Washy-Wooshy" class="ww-logo">                </a>
            </div>

            <div class="w-full sm:max-w-md mt-4 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>