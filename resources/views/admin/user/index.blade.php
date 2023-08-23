<x-app-layout title="Pengguna">
    <div class="card bg-white shadow">
        <div class="card-body">
            <div class="flex items-center justify-between">
                <div class="card-title">
                    Data Pengguna
                </div>
                <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Tambah</a>
            </div>

            <div class="overflow-x-auto mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Nama Pengguna</th>
                            <th>Role</th>
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
                                <td>
                                    <a href="{{ route('admin.user.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                        <i class="material-icons text-base">edit</i>
                                    </a>
                                    <button class="btn btn-sm btn-warning bg-red-500 text-white" type="button">
                                        <i class="material-icons text-base">delete</i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
