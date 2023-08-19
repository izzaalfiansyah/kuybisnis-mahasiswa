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
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="flex justify-between items-center">
                    <div class="card-title">Anggota Kelompok</div>
                    <button class="btn btn-primary" type="button" onclick="addAnggota.showModal()">Tambah</button>
                </div>
                <div class="mt-5 space-y-3">
                    <div class="card card-body border border-gray-200 group overflow-hidden">
                        <div class="flex md:flex-row flex-col gap-3 justify-between items-center">
                            <div class="lg:flex-1 w-full">
                                <div class="font-semibold">Mohammad Rafly Azzuhri</div>
                                NIM: E32211868
                            </div>
                            <div
                                class="lg:flex-1 w-full flex mt-5 md:mt-0 justify-start md:justify-end space-x-2 group-hover:translate-x-0 lg:translate-x-full transition">
                                <button class="btn btn-sm btn-primary" type="button">Edit</button>
                                <button class="btn btn-sm btn-warning bg-red-500 text-white"
                                    type="button">Hapus</button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body border border-gray-200 group overflow-hidden">
                        <div class="flex md:flex-row flex-col gap-3 justify-between items-center">
                            <div class="lg:flex-1 w-full">
                                <div class="font-semibold">Ricky Ahmad Mahbubi</div>
                                NIM: E32211868
                            </div>
                            <div
                                class="lg:flex-1 w-full flex mt-5 md:mt-0 justify-start md:justify-end space-x-2 group-hover:translate-x-0 lg:translate-x-full transition">
                                <button class="btn btn-sm btn-primary" type="button">Edit</button>
                                <button class="btn btn-sm btn-warning bg-red-500 text-white"
                                    type="button">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-dialog id="addAnggota">
        <form action="" method="post">

        </form>
    </x-dialog>
</x-app-layout>
