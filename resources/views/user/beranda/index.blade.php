<x-app-layout>
    <div class="space-y-6">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="pb-10 border-b border-gray-200">
                    <div class="card-title">Identitas Kelompok</div>
                    <div class="mt-5">
                        <div class="form-control mb-3">
                            <label for="asal" class="label">Asal Universitas</label>
                            <input type="text" class="input input-bordered" placeholder="Asal Universitas">
                        </div>
                        <div class="form-control mb-3">
                            <label for="nama" class="label">Nama Kelompok</label>
                            <input type="text" class="input input-bordered" placeholder="Masukkan Nama Kelompok">
                        </div>
                    </div>
                </div>
                <div class="mt-5 pb-10 border-b border-gray-200">
                    <div class="card-title">Ketua Kelompok</div>
                    <div class="flex lg:flex-row flex-col gap-x-3 items-center justify-between mt-5">
                        <div class="lg:flex-1 w-full form-control mb-3">
                            <label for="ketua" class="label">Nama Ketua</label>
                            <input type="text" class="input input-bordered" placeholder="Masukkan Nama Ketua">
                        </div>
                        <div class="lg:flex-1 w-full form-control mb-3">
                            <label for="ketua" class="label">NIM Ketua</label>
                            <input type="text" class="input input-bordered" placeholder="Masukkan NIM Ketua">
                        </div>
                    </div>
                </div>
                <div class="mt-5 flex gap-3">
                    <button type="submit" class="btn btn-primary w-auto">Simpan Perubahan</button>
                </div>
            </div>
        </div>
        @include('user.beranda.partials.anggota')
    </div>
</x-app-layout>
