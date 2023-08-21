<x-app-layout title="Penjualan">
    @if (request()->user()->kelompok)
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="flex items-center justify-between">
                    <div class="card-title">Penjualan</div>
                    <a href="{{ route('user.penjualan.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="overflow-x-auto mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Total Penjualan</th>
                                <th>Total Biaya</th>
                                <th>Nilai Keuntungan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($penjualan as $item)
                                <tr>
                                    <td><x-format-date :value="$item->created_at"></x-format-date></td>
                                    <td><x-format-money :value="$item->total_penjualan_bersih"></x-format-money></td>
                                    <td><x-format-money :value="$item->total_biaya"></x-format-money></td>
                                    <td><x-format-money :value="$item->nilai_keuntungan_bersih"></x-format-money></td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm"><i
                                                class="material-icons text-base">edit</i></a>
                                        <a href="" class="btn btn-warning bg-red-500 text-white btn-sm"><i
                                                class="material-icons text-base">delete</i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Penjualan belum tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <x-no-kelompok></x-no-kelompok>
    @endif
</x-app-layout>
