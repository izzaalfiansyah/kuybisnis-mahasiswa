<x-app-layout title="Kelompok">
    <div class="card bg-white shadow">
        <div class="card-body" x-data="{
            deleteFormUrl: '',
            nama: '',
        }">
            <div class="flex items-center justify-between">
                <div class="card-title">
                    Data Kelompok
                </div>
                <a href="{{ route('admin.kelompok.create') }}" class="btn btn-primary">Tambah</a>
            </div>

            <div class="mt-5 overflow-x-auto">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th>Nama Kelompok</th>
                            <th>Pembuat</th>
                            <th>Asal Universitas</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelompok as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->asal_universitas }}</td>
                                <td>

                                    <a href="{{ route('admin.kelompok.edit', $item->id) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="material-icons text-base">edit</i>
                                    </a>
                                    <button class="btn btn-sm btn-warning bg-red-500 text-white" type="button"
                                        x-on:click="() => {
                                    nama = '{{ $item->nama }}';
                                    deleteFormUrl = '{{ route('admin.kelompok.destroy', $item->id) }}';
                                    deleteModal.showModal();
                                }">
                                        <i class="material-icons text-base">delete</i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-5">
                {{ $kelompok->links() }}
            </div>

            <x-dialog id="deleteModal" header="Hapus Kelompok">
                <form x-bind:action="deleteFormUrl" method="POST">
                    @csrf
                    @method('DELETE')

                    <p>Anda yakin menghapus kelompok <span class="font-semibold" x-text="nama"></span>?</p>
                    <div class="mt-5 flex justify-end">
                        <button type="submit" class="btn btn-warning bg-red-500 text-white">
                            Hapus
                        </button>
                    </div>
                </form>
            </x-dialog>
        </div>
    </div>
</x-app-layout>
