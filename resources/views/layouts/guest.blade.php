<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KuyBisnis</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div x-data="{ show: true }" x-transition x-show="show" x-init="setTimeout(() => show = false, 800)"
        class="fixed top-0 left-0 right-0 bottom-0 bg-white flex items-center justify-center z-[99999]">
        <img src="{{ asset('assets/home/img/preloader.gif') }}" alt="Loading">
    </div>
    <div
        class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-primary to-[#12d1bb] px-5">
        {{-- <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div> --}}

        <div class="w-full sm:max-w-md mt-6 px-6 py-10 bg-white shadow-md overflow-hidden rounded">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
