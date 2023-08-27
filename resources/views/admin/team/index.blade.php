<x-app-layout title="Tim">
    <div class="card bg-white shadow">
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
                                <td></td>
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
    </div>
</x-app-layout>
