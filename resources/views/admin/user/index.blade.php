<x-app-layout title="Pengguna">
    <div class="card bg-white shadow">
        <div class="card-body" x-data="{
            deleteFormUrl: '',
            name: '',
        }">
            <div class="flex items-center justify-between">
                <div class="card-title">
                    Data Pengguna
                </div>
                <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Tambah</a>
            </div>

            <div class="overflow-x-auto mt-5">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Nama Pengguna</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <span
                                        class="px-3 p-1 {{ $item->role == '1' ? 'bg-green-200 text-green-500' : 'text-red-500 bg-red-200' }} rounded">{{ $item->role == '1' ? 'admin' : 'mahasiswa' }}</span>
                                </td>
                                <td>{{ $item->email_verified_at ? 'Terverifikasi' : 'Belum Verifikasi' }}</td>
                                <td>
                                    <a href="{{ route('admin.user.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                        <i class="material-icons text-base">edit</i>
                                    </a>
                                    <button class="btn btn-sm btn-warning bg-red-500 text-white" type="button"
                                        x-on:click="() => {
                                        name = '{{ $item->name }}';
                                        deleteFormUrl = '{{ route('admin.user.destroy', $item->id) }}';
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
                {{ $user->links() }}
            </div>

            <x-dialog id="deleteModal" header="Hapus Pengguna">
                <form x-bind:action="deleteFormUrl" method="POST">
                    @csrf
                    @method('DELETE')

                    <p>Anda yakin menghapus pengguna <span class="font-semibold" x-text="name"></span>?</p>
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
