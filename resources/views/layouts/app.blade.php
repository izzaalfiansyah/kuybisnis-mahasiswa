<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KuyBisnis') }}</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased admin" x-data="{ showSidebar: false }">
    {{-- <div class="lg:p-5 bg-gradient-to-br from-primary to-[#12d1bb]"> --}}
    <div class="min-h-screen bg-gray-50 overflow-hidden">
        <div x-bind:class="'z-[39] fixed top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50 ' + (showSidebar ? 'translate-x-0' :
            '-translate-x-full')"
            x-on:click="showSidebar = false">

        </div>
        <div
            x-bind:class="'fixed top-0 left-0 bottom-0 w-72 bg-white shadow z-40 text-white lg:translate-x-0 transition ' + (
                showSidebar ? 'translate-x-0' : '-translate-x-full')">
            <div class="bg-primary p-4 px-8">
                <div class="rounded-full bg-gray-200 w-20 h-20"></div>
                <div class="mt-5">
                    <div class="truncate text-sm">Muhammad Izza Alfiansyah</div>
                    <div class="flex items-center gap-x-2 mt-2">
                        <a href="/profile" class="block">
                            <i class="material-icons text-lg">person</i>
                        </a>
                        <a href="#" class="block" onclick="logout.showModal()">
                            <i class="material-icons text-lg">logout</i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                @php
                    $menus = [
                        [
                            'path' => '/dashboard',
                            'title' => 'Beranda',
                            'icon' => 'home',
                        ],
                        [
                            'path' => '/kewirausahaan',
                            'title' => 'Kewirausahaan',
                            'icon' => 'event',
                        ],
                        [
                            'path' => '/pemasaran-bisnis',
                            'title' => 'Pemasaran Bisnis',
                            'icon' => 'filter_alt',
                        ],
                        [
                            'path' => '/penjualan',
                            'title' => 'Penjualan',
                            'icon' => 'shopping_cart',
                        ],
                        [
                            'path' => '/laporan',
                            'title' => 'Laporan',
                            'icon' => 'description',
                        ],
                        [
                            'path' => '/profile',
                            'title' => 'Akun',
                            'icon' => 'person',
                        ],
                    ];
                @endphp

                <div class="badge ml-5 badge-primary text-xs">Main Menu</div>
                <ul class="menu w-full px-3 rounded-box bg-white text-gray-800">
                    @foreach ($menus as $item)
                        <li>
                            <a class="flex items-center hover:text-primary py-3" href="{{ $item['path'] }}">
                                <div class="material-icons text-lg mr-3 text-primary">{{ $item['icon'] }}</div>
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="lg:ml-72">
            <div class="shadow bg-white mb-10">
                <div class="flex items-center justify-between h-20 px-5">
                    <div class="flex items-center">
                        <button type="button" class="lg:hidden" x-on:click="showSidebar = true">
                            <i class="material-icons text-xl mr-4 mt-2">menu</i>
                        </button>
                        <div class="rounded-full px-4 p-2 bg-gray-100 flex items-center">
                            <div class="material-icons text-lg mr-2">home</div>
                            <div class="mr-2">/</div>
                            Dashboard
                        </div>
                    </div>
                    <div x-data="{ show: false }" class="relative">
                        <button x-on:click="show = !show">
                            <div class="rounded-full h-10 w-10 bg-gray-100"></div>
                        </button>
                        {{-- <div class="w-[200px] absolute bottom-0 right-0 translate-y-full bg-white border p-3 z-10"> --}}
                        <ul
                            x-bind:class="'bg-white text-gray-600 menu rounded-box absolute bottom-0 right-0 translate-y-full border border-gray-200 shadow w-[200px] z-10 origin-top-right transition ' +
                            (show ? 'scale-100' : 'scale-0')">
                            <li><a href="/profile">Profil</a></li>
                            <li>
                                <a href="#" onclick="logout.showModal()">Logout</a>
                            </li>
                        </ul>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            <div class="lg:px-10 p-3 lg:p-5">
                {{ $slot }}
            </div>
        </div>
        <x-dialog id="logout">
            <form action="{{ route('logout') }}" method="post" class="modal-box">
                @csrf
                <h3 class="font-bold text-lg">Logout!</h3>
                <p class="py-4">Anda yakin untuk keluar? Sesi anda akan berakhir!</p>
                <div class="modal-action">
                    <button type="submit" class="btn btn-warning bg-red-500 text-white">Logout</button>
                </div>
            </form>
        </x-dialog>
    </div>
    {{-- </div> --}}
</body>

</html>
