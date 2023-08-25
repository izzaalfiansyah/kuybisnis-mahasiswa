<div class="pb-4 mb-4 border-b">
    <div class="font-semibold mb-2">Jenis Pemasaran</div>
    <div class="mt-3">
        {{ [1 => 'Offline (Konvensional)', 'Online (Jaringan)', 'Offline dan Online'][(int) $kelompok_pemasaran->jenis] }}
    </div>
</div>

@if ($kelompok_pemasaran->jenis == '1' || $kelompok_pemasaran->jenis == '3')
    <div class="pb-4 mb-4 border-b">
        <div class="font-semibold mb-2">Metode</div>
        <div class="mt-3">{{ $kelompok_pemasaran->metode }}</div>
    </div>
@endif

@if ($kelompok_pemasaran->jenis == '2' || $kelompok_pemasaran->jenis == '3')
    <div class="pb-4 mb-4 border-b">
        <div class="font-semibold mb-2">Media Online</div>
        <div class="mt-3 overflow-x-auto">
            <table>
                <tbody>
                    @foreach ($kelompok_pemasaran->media as $item)
                        <tr>
                            <td>
                                {{ $item->nama_ecommerce ?: $item->ecommerce ?: $item->pilihan }}
                            </td>
                            <td class="px-4">:</td>
                            <td>{{ $item->nama_akun }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

<div class="pb-4 mb-4 border-b">
    <div class="font-semibold mb-2">Jenis Laporan</div>
    <div class="mt-3">
        {{ $kelompok_pemasaran->jenis_laporan }}
    </div>
</div>

<div class="pb-4 mb-4 border-b">
    <div class="font-semibold mb-2">Modal Usaha</div>
    <div class="mt-3">
        <x-format-money :value="$kelompok_pemasaran->modal_usaha"></x-format-money>
    </div>
</div>

<div class="pb-4 mb-4 border-b">
    <div class="font-semibold mb-2">Jumlah Produksi</div>
    <div class="mt-3">
        {{ $kelompok_pemasaran->jumlah_produksi }}
    </div>
</div>
