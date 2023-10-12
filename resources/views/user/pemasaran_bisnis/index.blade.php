<x-app-layout title="Pemasaran Bisnis">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="card-title mb-5">Video Motivasi</div>
                <iframe src="{{ $app_pengaturan?->link_video_strategi_marketing }}" class="w-full h-80 rounded-lg">
                </iframe>
            </div>
        </div>
        @if (request()->user()->kelompok)
            <form method="POST" action="{{ route('user.pemasaran-bisnis.store') }}" class="card bg-white shadow"
                x-data="{
                    jenis: '{{ old('jenis', $proses?->jenis) }}',
                    metode: `{{ old('metode', $proses?->metode) }}`,
                    metode_marketing: `{{ old('metode_marketing', $proses?->metode_marketing) }}`,
                    jenis_laporan: '{{ old('jenis_laporan', $proses?->jenis_laporan) }}',
                    modal_usaha: '{{ old('modal_usaha', $proses?->modal_usaha) }}',
                    jumlah_produksi: '{{ old('jumlah_produksi', $proses?->jumlah_produksi) }}',
                    media: JSON.parse('{{ json_encode(old('media', $proses?->media)) }}') || [{
                        pilihan: '',
                        ecommerce: '',
                        nama_ecommerce: '',
                        nama_akun: '',
                    }],
                }">
                <div class="card-body">
                    <div class="card-title mb-5">Proses Pemasaran</div>

                    @csrf
                    <input type="text" class="hidden" name="kelompok_id"
                        value="{{ request()->user()->kelompok?->id }}">
                    <div class="form-control">
                        <div class="flex items-center space-x-2 mb-2">
                            <label for="" class="label">Metode Marketing</label>
                            <button class="btn btn-sm btn-ghost" type="button" onclick="metodeMarketing.showModal()">
                                <i class="material-icons">help</i>
                            </button>
                        </div>
                        <select class="input input-bordered max-w-xl" x-model="metode_marketing"
                            name="metode_marketing">
                            <option value="">Pilih Metode Pemasaran</option>
                            <option value="1">Pull Marketing</option>
                            <option value="2">Push Marketing</option>
                            <option value="3">Push & Pull Marketing</option>
                        </select>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('metode_marketing')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Jenis Pemasaran</label>
                        <select class="input input-bordered max-w-xl" x-model="jenis" name="jenis">
                            <option value="">Pilih Jenis Pemasaran</option>
                            <option value="1">Offline (Konvensional)</option>
                            <option value="2">Online (Jaringan)</option>
                            <option value="3">Offline dan Online</option>
                        </select>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('jenis')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control" x-show="jenis == '1' || jenis == '3'">
                        <label for="" class="label">Pilihan Media</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none"
                            placeholder="Tuliskan metode yang akan digunakan" x-model="metode" name="metode"></textarea>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('metode')"></x-input-error>
                        </div>
                    </div>
                    <div x-show="jenis == '2' || jenis == '3'" class="form-control">
                        <label for="" class="label">Media Online</label>
                        <template x-for="item, index in media">
                            <div class="form-control p-5 rounded-lg border border-gray-200 relative mb-4">
                                <button type="button" class="absolute top-2 right-2 material-icons"
                                    x-on:click="() => {
                                    media = media.filter((_, i) => i != index);
                                }">
                                    close
                                </button>
                                <div class="mt-3 flex lg:flex-row lg:flex-wrap flex-col -mx-3">
                                    <div class="lg:w-1/2 px-3 w-full">
                                        <div class="form-control">
                                            <label for="" class="label">Media</label>
                                            <select class="input input-bordered w-full" x-model="item.pilihan" required
                                                x-bind:name="`media[${index}][pilihan]`">
                                                <option value="">Pilih Media</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="tiktok">Tiktok</option>
                                                <option value="twitter">Twitter</option>
                                                <option value="website">Website</option>
                                                <option value="ecommerce">Ecommerce</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 px-3 w-full" x-show="item.pilihan == 'ecommerce'">
                                        <div class="form-control">
                                            <label for="" class="label">Ecommerce</label>
                                            <select class="input input-bordered" x-model="item.ecommerce"
                                                x-bind:name="`media[${index}][ecommerce]`"
                                                x-bind:required="item.pilihan == 'ecommerce'">
                                                <option value="">Pilih Ecommerce</option>
                                                <option value="tokopedia">Tokopedia</option>
                                                <option value="shopee">Shopee</option>
                                                <option value="bukalapak">Bukalapak</option>
                                                <option value="lazzada">Lazzada</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 px-3 w-full" x-show="item.ecommerce == 'lainnya'">
                                        <div class="form-control">
                                            <label for="" class="label">Nama Ecommerce</label>
                                            <input type="text" class="input input-bordered"
                                                placeholder="Nama Ecommerce" x-model="item.nama_ecommerce"
                                                x-bind:name="`media[${index}][nama_ecommerce]`"
                                                x-bind:required="item.ecommerce == 'lainnya'">
                                        </div>
                                    </div>
                                    <div class="lg:w-1/2 px-3 w-full">
                                        <div class="form-control">
                                            <label for="" class="label">Nama Akun / Situs</label>
                                            <input type="text" class="input input-bordered"
                                                placeholder="Nama Akun / Situs" x-model="item.nama_akun"
                                                x-bind:name="`media[${index}][nama_akun]`" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <button class="btn btn-sm btn-primary" type="button"
                            x-on:click="() => {
                                media = [...media, {                        
                                    pilihan: '',
                                    ecommerce: '',
                                    nama_ecommerce: '',
                                    nama_akun: '',
                                }]
                            }">Tambah
                            Media</button>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Jenis Laporan</label>
                        <select class="input input-bordered max-w-xl" name="jenis_laporan" x-model="jenis_laporan">
                            <option value="">Pilih Jenis Laporan</option>
                            <option value="harian">Harian</option>
                            <option value="mingguan">Mingguan</option>
                            <option value="bulanan">Bulanan</option>
                        </select>
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('jenis_laporan')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Modal Usaha</label>
                        <input type="number" min="0" class="input input-bordered"
                            placeholder="Nominal Rupiah" name="modal_usaha" x-model="modal_usaha">
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('modal_usaha')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Jumlah Produksi</label>
                        <input type="number" min="0" class="input input-bordered"
                            placeholder="Jumlah Produksi/Kegiatan" name="jumlah_produksi" x-model="jumlah_produksi">
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('jumlah_produksi')"></x-input-error>
                        </div>
                    </div>
                    <div class="mt-8">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>

            <x-dialog id="metodeMarketing" header="Push Marketing dan Pull Marketing (2PM)"
                class="lg:w-3/5 max-w-full">
                <div class="mb-5">
                    <div class="mb-2">
                        Push Marketing merupakan strategi promosi bertujuan menyampaikan pesan kepada konsumen
                        potensial, namun konsumen potensial tersebut belum tentu benar-benar memiliki kebutuhan
                        terhadap produk yang dipromosikan (Grundström, 2015). Contoh Push Marketing dalam konteks
                        online antara lain iklan yang dikirim melalui surel, iklan yang muncul saat membuka situs,
                        dan iklan pay per click.
                    </div>
                    <div class="mb-2">
                        Sedangkan pengertian Pull Marketing adalah konsumen mendefinisikan
                        bentuk produk yang diinginkan, mencari, dan akhirnya mengkonsumsi (Papp, 2017). Hal-hal yang
                        membuat Pull Marketing sangat populer dalam digital marketing karena berdasarkan acuan
                        jumlah pengguna internet, sekaligus pengguna media sosial aktif (Sugiyono & goleman, daniel,
                        boyatzis, Richard, Mckee, 2016).
                    </div>
                </div>
                <div class="modal-action">
                    <button class="btn" type="button" onclick="metodeMarketing.close()">Tutup</button>
                </div>
            </x-dialog>
    </div>
@else
    <x-no-kelompok></x-no-kelompok>
    @endif
</x-app-layout>
