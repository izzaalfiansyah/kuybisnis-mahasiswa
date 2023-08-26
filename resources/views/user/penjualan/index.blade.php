<x-app-layout title="Penjualan">
    @if (request()->user()->kelompok)
        <div class="card bg-white shadow" x-data="{
            deleteFormUrl: '',
        }">
            <div class="card-body">
                <div class="flex items-center justify-between">
                    <div class="card-title">Penjualan</div>
                    <a href="{{ route('user.penjualan.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="overflow-x-auto mt-5">
                    <table class="table table-lg">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Jumlah Penjualan</th>
                                <th>Harga Jual</th>
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
                                    <td>{{ date('H:i', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->penjualan_bersih }}</td>
                                    <td><x-format-money :value="$item->harga_jual_produk"></x-format-money></td>
                                    <td><x-format-money :value="$item->total_penjualan_bersih"></x-format-money></td>
                                    <td><x-format-money :value="$item->total_biaya"></x-format-money></td>
                                    <td><x-format-money :value="$item->nilai_keuntungan_bersih"></x-format-money></td>
                                    <td>
                                        <a href="{{ route('user.penjualan.edit', $item->id) }}"
                                            class="btn btn-primary btn-sm"><i
                                                class="material-icons text-base">edit</i></a>
                                        <button type="button" href="#"
                                            x-on:click="() => {
                                            deleteFormUrl = '{{ route('user.penjualan.destroy', $item->id) }}';
                                            deletePenjualan.showModal();
                                            }"
                                            class="btn btn-warning bg-red-500 text-white btn-sm"><i
                                                class="material-icons text-base">delete</i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Penjualan belum tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-5">
                    {{ $penjualan->links() }}
                </div>
            </div>

            <x-dialog id="deletePenjualan" header="Hapus Penjualan">
                <form x-bind:action="deleteFormUrl" method="POST">
                    @csrf
                    @method('DELETE')
                    <p>Anda yakin menghapus data penjualan terpilih?</p>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-warning text-white bg-red-500">Hapus</button>
                    </div>
                </form>
            </x-dialog>
        </div>
    @else
        <x-no-kelompok></x-no-kelompok>
    @endif
</x-app-layout>
