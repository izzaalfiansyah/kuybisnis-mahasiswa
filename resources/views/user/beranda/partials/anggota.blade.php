<div class="card bg-white shadow">
    <div class="card-body">
        <div class="flex justify-between items-center">
            <div class="card-title">Anggota Kelompok</div>
            <button class="btn btn-primary {{ $kelompok?->id ?: 'hidden' }}" type="button"
                onclick="addAnggota.showModal()">Tambah</button>
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
                        <button class="btn btn-sm btn-warning bg-red-500 text-white" type="button">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-dialog id="addAnggota" header="Tambah Anggota">
        <form action="{{ route('user.kelompok.anggota.store') }}" method="post">
            @csrf
            <input type="text" class="hidden" name="kelompok_id" value="{{ $kelompok?->id }}">
            <div class="form-control mb-3">
                <label for="" class="label">Nama Anggota</label>
                <input type="text" class="input input-bordered" placeholder="Masukkan Nama Anggota"
                    value="{{ old('anggota_nama') }}" name="anggota_nama">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('anggota_nama')" />
                </div>
            </div>
            <div class="form-control mb-3">
                <label for="" class="label">NIM Anggota</label>
                <input type="text" class="input input-bordered" placeholder="Masukkan NIM Anggota"
                    value="{{ old('anggota_nim') }}" name="anggota_nim">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('anggota_nim')" />
                </div>
            </div>
            <div class="mt-8 flex justify-end">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
        </form>
    </x-dialog>

    <script>
        if ("{{ $errors->has('anggota_nama') || $errors->has('anggota_nim') }}" != "") {
            setTimeout(() => {
                addAnggota.showModal();
            }, 400);
        }
    </script>
</div>
