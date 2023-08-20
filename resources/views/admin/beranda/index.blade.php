<x-app-layout title="Beranda">
    <div class="card bg-white shadow">
        <div class="card-body">
            Selamat datang {{ request()->user()->name }}!
        </div>
    </div>
</x-app-layout>
