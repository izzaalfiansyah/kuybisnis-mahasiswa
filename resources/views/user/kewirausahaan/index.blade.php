<x-app-layout title="Kewirausahaan">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="card-title mb-5">Video Motivasi</div>
                <iframe src="{{ $app_pengaturan->link_video_bisnis_plan }}" class="w-full h-80 rounded-lg">
                </iframe>
            </div>
        </div>
        @if (request()->user()->kelompok?->id)
            <div class="card bg-white shadow">
                <form method="post" class="card-body" action="{{ route('user.kewirausahaan.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="hidden" name="id" value="{{ $usaha?->id }}">
                    <input type="text" class="hidden" name="kelompok_id"
                        value="{{ request()->user()->kelompok?->id }}">
                    <div class="card-title mb-5">Plan Bisnis</div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Kategori Usaha</label>
                        <select class="input input-bordered max-w-xl" name="kategori_id">
                            <option value="">Pilih Kategori Usaha</option>
                            @foreach ($kategori as $item)
                                <option {{ $item->id == old('kategori_id', $usaha?->kategori_id) ? 'selected' : '' }}
                                    value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('kategori_id')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Nama Produk</label>
                        <input type="text" class="input input-bordered"
                            placeholder="Nama produk yang akan dipasarkan" name="nama_produk"
                            value="{{ old('nama_produk', $usaha?->nama_produk) }}">
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('nama_produk')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Legalitas Usaha</label>
                        <div class="flex items-center lg:flex-row flex-col gap-3">
                            <input type="file" class="file-input file-input-bordered w-full max-w-xl"
                                name="legalitas_usaha">
                            @if ($usaha?->legalitas_usaha)
                                <div class="lg:w-sm">
                                    <a href="{{ asset($usaha?->legalitas_usaha) }}" class="btn btn-primary"
                                        target="_blank">Lihat</a>
                                </div>
                            @endif
                        </div>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('legalitas_usaha')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Value Proposition</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Manfaat bisnis bagi konsumen"
                            name="manfaat">{{ old('manfaat', $usaha?->manfaat) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('manfaat')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Customer Segments</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Segmentasi Konsumen"
                            name="segmentasi_konsumen">{{ old('segmentasi_konsumen', $usaha?->segmentasi_konsumen) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('segmentasi_konsumen')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Customer Relationship</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Hubungan Konsumen"
                            name="hubungan_konsumen">{{ old('hubungan_konsumen', $usaha?->hubungan_konsumen) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('hubungan_konsumen')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Channels</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Saluran" name="saluran">{{ old('saluran', $usaha?->saluran) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('saluran')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Key Activities</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Aktifitas Utama"
                            name="aktifitas_utama">{{ old('aktifitas_utama', $usaha?->aktifitas_utama) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('aktifitas_utama')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Key Resources</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Sumberdaya Utama"
                            name="sumberdaya_utama">{{ old('sumberdaya_utama', $usaha?->sumberdaya_utama) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('sumberdaya_utama')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Key Partners</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Mitra Utama"
                            name="mitra_utama">{{ old('mitra_utama', $usaha?->mitra_utama) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('mitra_utama')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Cost Structures</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Struktur Biaya"
                            name="struktur_biaya">{{ old('struktur_biaya', $usaha?->struktur_biaya) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('struktur_biaya')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Revenue Streams</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Arus Pendapatan"
                            name="arus_pendapatan">{{ old('arus_pendapatan', $usaha?->arus_pendapatan) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('arus_pendapatan')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Foto Produk</label>
                        <input type="file" multiple class="file-input file-input-bordered max-w-xl"
                            name="foto_produk[]" accept="image/*">
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('foto_produk')" />
                        </div>
                        <div class="mt-3 grid lg:grid-cols-4 grid-cols-2 gap-4">
                            @foreach ($usaha?->foto_produk as $item)
                                <img src="{{ asset($item) }}" alt="" class="shadow">
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-10">
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
    </div>
@else
    <x-no-kelompok></x-no-kelompok>
    @endif
    </div>
</x-app-layout>
