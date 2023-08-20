<x-app-layout>
    <form method="post" action="{{ route('user.kelompok.store') }}" class="space-y-6">
        @csrf
        <input type="text" name="users_id" value="{{ request()->user()->id }}" class="hidden">
        <input type="text" class="hidden" name="id" value="{{ $kelompok?->id }}">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="pb-10 border-b border-gray-200">
                    <div class="card-title">Identitas Kelompok</div>
                    <div class="mt-5">
                        <div class="form-control mb-3">
                            <label for="asal" class="label">Asal Universitas</label>
                            <input type="text" class="input input-bordered" placeholder="Asal Universitas"
                                name="asal_universitas"
                                value="{{ old('asal_universitas', $kelompok?->asal_universitas) }}">
                            <div class="label label-text-alt">
                                <x-input-error :messages="$errors->get('asal_universitas')"></x-input-error>
                            </div>
                        </div>
                        <div class="form-control mb-3">
                            <label for="nama" class="label">Nama Kelompok</label>
                            <input type="text" class="input input-bordered" placeholder="Masukkan Nama Kelompok"
                                name="nama" value="{{ old('nama', $kelompok?->nama) }}">
                            <div class="label label-text-alt">
                                <x-input-error :messages="$errors->get('nama')"></x-input-error>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 pb-10 border-b border-gray-200">
                    <div class="card-title">Ketua Kelompok</div>
                    <div class="flex lg:flex-row flex-col gap-x-3 items-center justify-between mt-5">
                        <div class="lg:flex-1 w-full form-control mb-3">
                            <label for="ketua" class="label">Nama Ketua</label>
                            <input type="text" class="input input-bordered" placeholder="Masukkan Nama Ketua"
                                name="ketua_nama" value="{{ old('ketua_nama', $kelompok?->ketua_nama) }}">
                            <div class="label label-text-alt">
                                <x-input-error :messages="$errors->get('ketua_nama')"></x-input-error>
                            </div>
                        </div>
                        <div class="lg:flex-1 w-full form-control mb-3">
                            <label for="ketua" class="label">NIM Ketua</label>
                            <input type="text" class="input input-bordered" placeholder="Masukkan NIM Ketua"
                                name="ketua_nim" value="{{ old('ketua_nim', $kelompok?->ketua_nim) }}">
                            <div class="label label-text-alt">
                                <x-input-error :messages="$errors->get('ketua_nim')"></x-input-error>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 flex gap-3">
                    <button type="submit" class="btn btn-primary w-auto">Simpan Perubahan</button>
                </div>
            </div>
        </div>
        @include('user.beranda.partials.anggota')
    </form>
</x-app-layout>
