<x-app-layout :title="'Kelompok ' . $kelompok->nama">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div>
                    <div class="mb-5 pb-5 border-b">
                        <div class="mb-3">Nama Kelompok</div>
                        <div class="text-xl font-semibold">{{ $kelompok->nama }}</div>
                    </div>
                    <div class="mb-5 pb-5 border-b">
                        <div class="mb-3">Asal Universitas</div>
                        <div class="text-xl font-semibold">{{ $kelompok->asal_universitas }}</div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="flex lg:flex-row flex-col gap-x-3 items-center justify-between mt-5">
                        <div class="lg:flex-1 w-full mb-5">
                            <div class="pb-5 border-b">
                                <div class="mb-3">Nama Ketua</div>
                                <div class="text-xl font-semibold">{{ $kelompok->ketua_nama }}</div>
                            </div>
                        </div>
                        <div class="lg:flex-1 w-full mb-5">
                            <div class="pb-5 border-b">
                                <div class="mb-3">NIM Ketua</div>
                                <div class="text-xl font-semibold">{{ $kelompok->ketua_nim }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body bg-white shadow">
            <div class="tabs">
                <a class="tab tab-lg tab-bordered tab-active">Daftar Anggota</a>
                <a class="tab tab-lg tab-bordered">Pengembangan Bisnis</a>
                <a class="tab tab-lg tab-bordered">Cara Pemasaran</a>
                <a class="tab tab-lg tab-bordered">Hasil Kegiatan</a>
            </div>

            <div class="mt-10">
                @include('admin.kelompok.partials.anggota')
            </div>
        </div>
    </div>
</x-app-layout>
