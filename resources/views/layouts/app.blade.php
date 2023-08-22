@props(['title'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KuyBisnis') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased admin" x-data="{ showSidebar: false }">
    <div x-data="{ show: true }" x-transition x-show="show" x-init="setTimeout(() => show = false, 800)"
        class="fixed top-0 left-0 right-0 bottom-0 bg-white flex items-center justify-center z-[99999]">
        <img src="{{ asset('assets/home/img/preloader.gif') }}" alt="Loading">
    </div>
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
                <div class="flex items-center p-5 bg-white rounded-lg">
                    <img src="{{ asset('assets/home/img/logo.png') }}" alt="Logo APP">
                </div>
                <div class="mt-5">
                    <div class="truncate">{{ request()->user()->name }}</div>
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
                    if (request()->user()->role == '1') {
                        $menus = [
                            [
                                'route' => 'admin.dashboard.index',
                                'title' => 'Beranda',
                                'icon' => 'home',
                            ],
                            [
                                'route' => 'admin.usaha-kategori.index',
                                'title' => 'Kategori Usaha',
                                'icon' => 'sync_alt',
                            ],
                            [
                                'route' => 'admin.user.index',
                                'title' => 'Pengguna',
                                'icon' => 'people',
                            ],
                            [
                                'route' => 'admin.kelompok.index',
                                'title' => 'Kelompok',
                                'icon' => 'switch_account',
                            ],
                            [
                                'route' => 'admin.pengaturan.index',
                                'title' => 'Pengaturan',
                                'icon' => 'settings',
                            ],
                            [
                                'route' => 'profile.edit',
                                'title' => 'Akun',
                                'icon' => 'person',
                            ],
                        ];
                    } else {
                        $menus = [
                            [
                                'route' => 'user.dashboard.index',
                                'title' => 'Beranda',
                                'icon' => 'home',
                            ],
                            [
                                'route' => 'user.kewirausahaan.index',
                                'title' => 'Kewirausahaan',
                                'icon' => 'event',
                            ],
                            [
                                'route' => 'user.pemasaran-bisnis.index',
                                'title' => 'Pemasaran Bisnis',
                                'icon' => 'filter_alt',
                            ],
                            [
                                'route' => 'user.penjualan.index',
                                'title' => 'Penjualan',
                                'icon' => 'shopping_cart',
                            ],
                            [
                                'route' => 'user.laporan.index',
                                'title' => 'Laporan',
                                'icon' => 'description',
                            ],
                            [
                                'route' => 'profile.edit',
                                'title' => 'Akun',
                                'icon' => 'person',
                            ],
                        ];
                    }
                @endphp

                {{-- <div class="badge ml-5 rounded-full bg-primary text-white text-sm px-5 py-3">Main Menu</div> --}}
                <ul class="menu w-full px-3 rounded-box bg-white text-gray-800 text-base">
                    @foreach ($menus as $item)
                        <li>
                            <a class="flex items-center hover:text-primary py-3 {{ request()->routeIs($item['route']) ? '!bg-primary !text-white' : '' }}"
                                href="{{ route($item['route']) }}">
                                <div class="material-icons text-lg mr-3">{{ $item['icon'] }}</div>
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <a class="flex items-center hover:text-primary py-3" href="#"
                            onclick="logout.showModal()">
                            <div class="material-icons text-lg mr-3">logout</div>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lg:ml-72">
            <div class="shadow bg-white mb-8 sticky top-0 left-0 right-0 z-[10]">
                <div class="flex items-center justify-between h-20 px-5">
                    <div class="flex items-center">
                        <button type="button" class="lg:hidden" x-on:click="showSidebar = true">
                            <i class="material-icons text-xl mr-4 mt-2">menu</i>
                        </button>
                        <div class="rounded-full px-5 p-2 bg-gray-100 flex items-center">
                            <div class="material-icons text-lg mr-2">home</div>
                            <div class="mr-2">/</div>
                            {{ isset($title) ? $title : 'Beranda' }}
                        </div>
                    </div>
                    <div x-data="{ show: false }" class="relative">
                        <button x-on:click="show = !show">
                            <img class="rounded-full h-10 w-10 bg-gray-100"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5j1QoysD2S9Mq32jDCO9ExkcKWP19RbcDxA&usqp=CAU" />
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
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-white rounded shadow mb-5" x-data="{ show: true }"
                        x-show="show" x-init="setTimeout(() => show = false, 3000)">{{ session()->get('success_message') }}</div>
                @endif
                {{ $slot }}
            </div>
        </div>
        <x-dialog id="logout">
            <form action="{{ route('logout') }}" method="post">
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
