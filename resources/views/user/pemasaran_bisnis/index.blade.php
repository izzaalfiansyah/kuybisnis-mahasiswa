<x-app-layout title="Pemasaran Bisnis">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="card-title mb-5">Video Motivasi</div>
                <div class="h-72"></div>
            </div>
        </div>
        <div class="card bg-white shadow" x-data="{
            jenis_pemasaran: '',
            media: '',
            ecommerce: '',
        }">
            <div class="card-body">
                <div class="card-title mb-5">Proses Pemasaran</div>
                <div class="form-control mb-3">
                    <label for="" class="label">Jenis Pemasaran</label>
                    <select class="input input-bordered max-w-xl" x-model="jenis_pemasaran">
                        <option value="">Pilih Jenis Pemasaran</option>
                        <option value="1">Offline (Konvensional)</option>
                        <option value="2">Online (Jaringan)</option>
                        <option value="3">Offline dan Online</option>
                    </select>
                </div>
                <div class="form-control" x-show="jenis_pemasaran == '1' || jenis_pemasaran == '3'">
                    <label for="" class="label">Pilihan Media</label>
                    <textarea rows="5" class="textarea textarea-bordered resize-none"
                        placeholder="Tuliskan metode yang akan digunakan"></textarea>
                </div>
                <div class="form-control" x-show="jenis_pemasaran == '2' || jenis_pemasaran == '3'">
                    <div class="flex lg:flex-row gap-x-3">
                        <div class="lg:flex-1 w-full">
                            <div class="form-control">
                                <label for="" class="label">Media</label>
                                <select class="input input-bordered w-full" x-model="media">
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
                        <div class="lg:flex-1 w-full" x-show="media == 'ecommerce'">
                            <div class="form-control">
                                <label for="" class="label">Ecommerce</label>
                                <select class="input input-bordered" x-model="ecommerce">
                                    <option value="">Pilih Ecommerce</option>
                                    <option value="tokopedia">Tokopedia</option>
                                    <option value="shopee">Shopee</option>
                                    <option value="bukalapak">Bukalapak</option>
                                    <option value="lazzada">Lazzada</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="lg:flex-1 w-full" x-show="ecommerce == 'lainnya'">
                            <div class="form-control">
                                <label for="" class="label">Nama Ecommerce</label>
                                <input type="text" class="input input-bordered"
                                    placeholder="Masukkan Nama Ecommerce">
                            </div>
                        </div>
                        <div class="lg:flex-1 w-full">
                            <div class="form-control">
                                <label for="" class="label">Nama Akun</label>
                                <input type="text" class="input input-bordered" placeholder="Masukkan Nama Akun">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button class="btn btn-sm btn-primary">Tambah Media</button>
                    </div>
                </div>
                <div class="form-control">
                    <label for="" class="label">Jenis Laporan</label>
                    <select class="input input-bordered max-w-xl">
                        <option value="">Pilih Jenis Laporan</option>
                        <option value="harian">Harian</option>
                        <option value="mingguan">Mingguan</option>
                        <option value="bulanan">Bulanan</option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="" class="label">Modal Usaha</label>
                    <input type="number" class="input input-bordered" placeholder="Nominal Rupiah">
                </div>
                <div class="form-control">
                    <label for="" class="label">Jumlah Produksi</label>
                    <input type="number" class="input input-bordered" placeholder="Jumlah Produksi/Kegiatan">
                </div>
                <div class="mt-8">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
