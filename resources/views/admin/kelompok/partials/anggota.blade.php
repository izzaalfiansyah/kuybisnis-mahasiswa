<div class="card bg-white shadow" x-data="{
    nama: '',
    nim: '',
    id: '',
    destroyFormUrl: '',
}">
    <div class="card-body">
        <div class="flex justify-between items-center">
            <div class="card-title">Anggota Kelompok</div>
            <button class="btn btn-primary {{ $kelompok->id ?: 'hidden' }}" type="button"
                x-on:click="() => {
              id = '';
              nama = '';
              nim = '';
              saveAnggota.showModal();
          }">Tambah</button>
        </div>
        <div class="mt-5 space-y-3">
            @forelse ($kelompok_anggota as $item)
                <div class="card card-body border border-gray-200 group overflow-hidden">
                    <div class="flex md:flex-row flex-col gap-3 justify-between items-center">
                        <div class="lg:flex-1 w-full">
                            <div class="font-semibold">{{ $item->nama }}</div>
                            NIM: {{ $item->nim }}
                        </div>
                        <div
                            class="lg:flex-1 w-full flex mt-5 md:mt-0 justify-start md:justify-end space-x-2 group-hover:translate-x-0 lg:translate-x-full transition">
                            <button class="btn btn-sm btn-primary" type="button"
                                x-on:click="() => {
                              id = '{{ $item->id }}';
                              nama = '{{ $item->nama }}';
                              nim = '{{ $item->nim }}';
                              saveAnggota.showModal();
                          }">Edit</button>
                            <button class="btn btn-sm btn-warning bg-red-500 text-white" type="button"
                                x-on:click="() => {
                              id = '{{ $item->id }}';
                              nama = '{{ $item->nama }}';
                              nim = '{{ $item->nim }}';
                              destroyFormUrl = `{{ route('admin.kelompok.anggota.destroy', $item->id) }}`
                              destroyAnggota.showModal();
                          }">Hapus</button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center">Anggota belum ditambahkan</div>
            @endforelse
        </div>
    </div>

    <x-dialog id="saveAnggota" x-bind:header="`${id ? 'Edit' : 'Tambah'} Anggota`">
        <form action="{{ route('admin.kelompok.anggota.store') }}" method="post">
            @csrf
            <input type="text" class="hidden" name="id" x-model="id">
            <input type="text" class="hidden" name="kelompok_id" value="{{ $kelompok->id }}">
            <div class="form-control mb-3">
                <label for="" class="label">Nama Anggota</label>
                <input type="text" class="input input-bordered" placeholder="Masukkan Nama Anggota"
                    value="{{ old('anggota_nama') }}" name="anggota_nama" x-model="nama">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('anggota_nama')" />
                </div>
            </div>
            <div class="form-control mb-3">
                <label for="" class="label">NIM Anggota</label>
                <input type="text" class="input input-bordered" placeholder="Masukkan NIM Anggota"
                    value="{{ old('anggota_nim') }}" name="anggota_nim" x-model="nim">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('anggota_nim')" />
                </div>
            </div>
            <div class="mt-8 flex justify-end">
                <button type="submit" class="btn btn-primary"
                    x-text="id ? 'Simpan Perubahan' : 'Tambahkan'">Tambahkan</button>
            </div>
        </form>
    </x-dialog>

    <x-dialog id="destroyAnggota" header="Hapus Anggota">
        <form x-bind:action="destroyFormUrl" method="post">
            @csrf
            @method('DELETE')
            <input type="text" class="hidden" name="id" x-model="id">

            <p>Anda yakin untuk menghapus anggota <span class="font-semibold" x-html="nama"></span>?</p>

            <div class="mt-8 flex justify-end">
                <button type="submit" class="btn btn-warning bg-red-500 text-white">Hapus</button>
            </div>
        </form>
    </x-dialog>

    <script>
        if ("{{ $errors->has('anggota_nama') || $errors->has('anggota_nim') }}" != "") {
            setTimeout(() => {
                saveAnggota.showModal();
            }, 400);
        }
    </script>
</div>
