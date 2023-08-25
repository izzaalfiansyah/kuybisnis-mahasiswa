<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Kategori Usaha</div>
    <div class="text-xl">
        {{ $kelompok_usaha->kategori->nama }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Nama Produk</div>
    <div class="text-xl">
        {{ $kelompok_usaha->nama_produk }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-4 font-semibold">Legalitas Usaha</div>
    <div class="lg:w-sm">
        <a href="{{ asset($kelompok_usaha->legalitas_usaha) }}" class="btn btn-primary" target="_blank">Lihat
            Legalitas</a>
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Value Proposition</div>
    <div class="mt-3">
        {{ $kelompok_usaha->manfaat }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Customer Segments</div>
    <div class="mt-3">
        {{ $kelompok_usaha->segmentasi_konsumen }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Customer Relationship</div>
    <div class="mt-3">
        {{ $kelompok_usaha->hubungan_konsumen }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Channels</div>
    <div class="mt-3">
        {{ $kelompok_usaha->saluran }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Key Activities</div>
    <div class="mt-3">
        {{ $kelompok_usaha->aktifitas_utama }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Key Resources</div>
    <div class="mt-3">
        {{ $kelompok_usaha->sumberdaya_utama }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Key Partners</div>
    <div class="mt-3">
        {{ $kelompok_usaha->mitra_utama }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Cost Structures</div>
    <div class="mt-3">
        {{ $kelompok_usaha->struktur_biaya }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Revenue Streams</div>
    <div class="mt-3">
        {{ $kelompok_usaha->arus_pendapatan }}
    </div>
</div>
<div class="mb-4 pb-4 border-b">
    <div class="mb-2 font-semibold">Foto Produk</div>
    <div class="mt-3 grid lg:grid-cols-4 grid-cols-2 gap-4">
        @if ($kelompok_usaha->foto_produk)
            @foreach ($kelompok_usaha->foto_produk as $item)
                <img src="{{ asset($item) }}" alt="" class="shadow">
            @endforeach
        @endif
    </div>
</div>
