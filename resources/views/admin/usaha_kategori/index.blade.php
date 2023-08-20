<x-app-layout title="Kategori Usaha">
    <div x-data="{
        formSaveUrl: '',
        formDeleteUrl: '',
        nama: '',
        isEdit: false,
    }">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="flex items-center justify-between">
                    <div class="card-title">Data Kategori Usaha</div>
                    <button type="button"
                        x-on:click="() => {
                    formSaveUrl = `{{ route('admin.usaha-kategori.store') }}`;
                    nama = '';
                    isEdit = false;
                    saveKategori.showModal();    
                }"
                        class="btn btn-primary">Tambah</button>
                </div>
                <div class="mt-5">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($usahaKategori as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                x-on:click="() => {
                                                formSaveUrl = `{{ route('admin.usaha-kategori.update', $item->id) }}`
                                                nama = '{{ $item->nama }}';
                                                isEdit = true;
                                                saveKategori.showModal();
                                            }"><i
                                                    class="material-icons text-base">edit</i></button>
                                            <button type="button" class="btn btn-warning bg-red-500 text-white btn-sm"
                                                x-on:click="() => {
                                                        formDeleteUrl = `{{ route('admin.usaha-kategori.destroy', $item->id) }}`
                                                        nama = '{{ $item->nama }}';
                                                        destroyKategori.showModal();
                                                    }"><i
                                                    class="material-icons text-base">delete</i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center">data tidak tersedia</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">{{ $usahaKategori->links() }}</div>
                </div>
            </div>
        </div>

        <x-dialog id="saveKategori" x-bind:header="isEdit ? 'Edit' : 'Tambah' + ' Kategori'">
            <form x-bind:action="formSaveUrl" method="POST">
                @csrf
                <input type="hidden" name="_method" x-bind:value="isEdit ? 'PUT' : 'POST'">
                <div class="form-control">
                    <label for="" class="label">Nama</label>
                    <input type="text" class="input input-bordered" name="nama" value="{{ old('nama') }}"
                        placeholder="Masukkan Nama Kategori" x-model="nama">
                    <div class="label label-alt text">
                        <x-input-error :messages="$errors->get('nama')"></x-input-error>
                    </div>
                </div>

                <div class="mt-5 flex justify-end">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </x-dialog>

        <x-dialog id="destroyKategori" header="Hapus Kategori">
            <form x-bind:action="formDeleteUrl" method="POST">
                @csrf
                @method('DELETE')

                <p>Anda yakin menghapus kategori <span class="font-semibold" x-html="nama"></span>?</p>

                <div class="mt-5 flex justify-end">
                    <button type="submit" class="btn btn-warning bg-red-500 text-white">Hapus</button>
                </div>
            </form>
        </x-dialog>

        <script>
            if ("{{ $errors->has('nama') }}" != '') {
                setTimeout(() => {
                    saveKategori.showModal();
                }, 400);
            }
        </script>
    </div>
</x-app-layout>
