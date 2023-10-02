<x-app-layout title="Kewirausahaan">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="card-title mb-5">Video Motivasi</div>
                <iframe src="{{ $app_pengaturan?->link_video_bisnis_plan }}" class="w-full h-80 rounded-lg">
                </iframe>
            </div>
        </div>
        @if (request()->user()->kelompok)
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
                        <div class="flex items-center space-x-2 mb-2">
                            <label for="" class="label">Value Proposition</label>
                            <button class="btn btn-sm btn-ghost" type="button" onclick="valueProposition.showModal()">
                                <i class="material-icons">help</i>
                            </button>
                        </div>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Manfaat bisnis bagi konsumen"
                            name="manfaat">{{ old('manfaat', $usaha?->manfaat) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('manfaat')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <div class="flex items-center space-x-2 mb-2">
                            <label for="" class="label">Customer Segments</label>
                            <button class="btn btn-sm btn-ghost" type="button" onclick="customerSegments.showModal()">
                                <i class="material-icons">help</i>
                            </button>
                        </div>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Segmentasi Konsumen"
                            name="segmentasi_konsumen">{{ old('segmentasi_konsumen', $usaha?->segmentasi_konsumen) }}</textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('segmentasi_konsumen')" />
                        </div>
                    </div>
                    <div class="form-control mb-3">
                        <div class="flex items-center space-x-2 mb-2">
                            <label for="" class="label">Customer Relationship</label>
                            <button class="btn btn-sm btn-ghost" type="button"
                                onclick="customerRelationship.showModal()">
                                <i class="material-icons">help</i>
                            </button>
                        </div>
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
                            @if ($usaha?->foto_produk)
                                @foreach ($usaha?->foto_produk as $item)
                                    <img src="{{ asset($item) }}" alt="" class="shadow">
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="mt-10">
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </div>
                </form>
            </div>

            <x-dialog id="valueProposition" header="Value Proposition" class="lg:w-3/5 max-w-full">
                <div class="mb-5">
                    <p class="text-justify mb-2">
                        Sederhananya, value proposition merupakan nilai jual produk/jasa Anda sehingga konsumen memilih
                        perusahaan Anda daripada kompetitor. Sebelum menentukan hal yang lain, value proposition sangat
                        krusial untuk diketahui agar bisnis Anda menjual apa yang konsumen benar-benar butuhkan dan
                        memastikan apakah perusahaan Anda menjual solusi atas permasalahan mereka.
                    </p>
                    <p class="text-justify mb-2">
                        Berikut adalah beberapa pertanyaan yang dapat membantu Anda:
                    </p>
                    <p class="text-justify mb-2">
                    <ul class="list-disc pl-5">
                        <li>Apa penyebab masalah itu terjadi?</li>
                        <li>Mengapa konsumen ingin masalah tersebut hilang?</li>
                        <li>Apa manfaat bisnis saya untuk konsumen?</li>
                    </ul>
                    </p>
                </div>
                <div class="modal-action">
                    <button class="btn" type="button" onclick="valueProposition.close()">Tutup</button>
                </div>
            </x-dialog>

            <x-dialog id="customerSegments" header="Customer Segments" class="lg:w-3/5 max-w-full">
                <div class="mb-5">
                    <p class="text-justify mb-2">
                        Value proposition saling berkaitan erat dengan segmentasi konsumen Anda. Target konsumen bisa
                        dibagi menjadi berbagai segmen sesuai kebutuhan, contohnya, berdasarkan usia, gender, hobi
                        maupun tingkat konsumerisme.
                    </p>
                    <p class="text-justify mb-2">
                        Lalu, bagaimana cara mengetahui secara spesifik target konsumen kita?
                    </p>
                    <p class="text-justify mb-2">
                        Beberapa pertanyaan di bawah ini bisa digunakan untuk menentukan target konsumen Anda!
                    </p>
                    <div class="text-justify mb-2">
                        <ul class="list-disc pl-5">
                            <li>Kepada siapa solusi Anda paling memberikan dampak positif?</li>
                            <li>Apakah solusi Anda cocok untuk perorangan atau bisnis lain?</li>
                            <li>Bagaimana karakter perorangan atau bisnis tersebut?</li>
                            <li>Solusi Anda cocok untuk laki-laki atau perempuan? Atau keduanya</li>
                            <li>Berapa umur mereka?</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-action">
                    <button class="btn" type="button" onclick="customerSegments.close()">Tutup</button>
                </div>
            </x-dialog>

            <x-dialog id="customerRelationship" header="Customer Segments" class="lg:w-3/5 max-w-full">
                <div class="mb-5">
                    <p class="text-justify mb-2">
                        Jadi, tadi kita sudah menentukan Value Proposition dan segmentasi konsumen. Selanjutnya adalah
                        memahami konsumen Anda dan "mendekati" mereka.
                    </p>
                    <p class="text-justify mb-2">
                        Cara mendekati konsumen ada banyak, baik secara personal, by phone, dan sebagainya. Di dalam
                        customer relationship, Anda dapat mengetahui cara apa yang paling efektif untuk berinteraksi
                        dengan konsumen maupun calon konsumen. Misalnya Anda memiliki bisnis online yang menjual produk
                        aksesoris rambut dengan target usia 18-25 tahun. Tentunya target konsumen Anda adalah perempuan
                        yang suka berdandan atau berpenampilan rapi. Lalu bagaimana membuat mereka mau membeli produk
                        aksesoris rambut Anda? Dengan memberikan informasi seputar perawatan rambut, tips mengikat
                        rambut, dan sebagainya.
                    </p>
                    <p class="text-justify mb-2">
                        Cara termudah menjangkau konsumen milenial adalah dengan berinteraksi lewat channel yang ´sering
                        didatangi oleh target konsumen Anda´, berkomunikasi sesuai dengan bahasa mereka (ala milenial
                        misalnya) dan memberikan konten-konten yang relevan dengan interest mereka.
                    </p>
                </div>
                <div class="modal-action">
                    <button class="btn" type="button" onclick="customerRelationship.close()">Tutup</button>
                </div>
            </x-dialog>
        @else
            <x-no-kelompok></x-no-kelompok>
        @endif
    </div>
</x-app-layout>
