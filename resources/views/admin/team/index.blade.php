<x-app-layout title="Tim">
    <div class="card bg-white shadow" x-data="{
        nama: '',
        deleteFormUrl: '',
    }">
        <div class="card-body">
            <div class="flex items-center justify-between mb-5">
                <div class="card-title">Data Tim</div>
                <a href="{{ route('admin.team.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="overflow-x-auto">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($team as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset($item->foto) }}" alt=""
                                        class="rounded-full h-12 w-12 object-cover">
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>

                                    <a href="{{ route('admin.team.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                        <i class="material-icons text-base">edit</i>
                                    </a>
                                    <button class="btn btn-sm btn-warning bg-red-500 text-white" type="button"
                                        x-on:click="() => {
                                    nama = '{{ $item->nama }}';
                                    deleteFormUrl = '{{ route('admin.team.destroy', $item->id) }}';
                                    deleteModal.showModal();
                                }">
                                        <i class="material-icons text-base">delete</i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">tim belum tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <x-dialog id="deleteModal" header="Hapus Tim">
            <form x-bind:action="deleteFormUrl" method="POST">
                @csrf
                @method('DELETE')

                <p>Anda yakin menghapus <span class="font-semibold" x-text="nama"></span>?</p>
                <div class="mt-5 flex justify-end">
                    <button type="submit" class="btn btn-warning bg-red-500 text-white">
                        Hapus
                    </button>
                </div>
            </form>
        </x-dialog>
    </div>
</x-app-layout>
