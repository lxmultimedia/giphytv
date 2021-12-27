<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body class="antialiased">
<div
    class="relative flex flex-col items-top justify-center min-h-screen bg-gray-900 items-center py-4 pt-0">

<!--
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/dashboard') }}"
                   class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
    @endauth
        </div>
    @endif
    -->

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:pt-0">
            <img class="w-1/2" src="{{ asset('images/gtv.png') }}">
        </div>

        <livewire:giphy-generator/>

    </div>

    <div class="flex justify-center text-sans text-sm text-gray-500 mt-20">&copy; 2021 -&nbsp;<a
            href="https://www.lxmedia.tk" target="_blank" class="underline underline-offset-1 inline-block">LX
            Multimedia</a></div>
</div>
@livewireScripts
</body>
</html>
