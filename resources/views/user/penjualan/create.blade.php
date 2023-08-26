<x-app-layout title="Tambah Penjualan">
    <form method="post" action="{{ route('user.penjualan.store') }}" class="card bg-white shadow">
        @csrf

        <input type="text" class="hidden" name="kelompok_id" value="{{ request()->user()->kelompok->id }}">

        <div class="card-body">
            <div class="card-title">Tambah Penjualan</div>
            <div x-data="{
                penjualanBersih: '{{ old('penjualan_bersih', '0') }}',
                hargaJualProduk: '{{ old('harga_jual_produk', '0') }}',
                biaya: {
                    tetap: '{{ old('biaya_tetap', '0') }}',
                    variabel: '{{ old('biaya_variabel', '0') }}',
                    operasional: '{{ old('biaya_operasional', '0') }}',
                    nonOperasional: '{{ old('biaya_non_operasional', '0') }}',
                    pajak: '{{ old('biaya_pajak', '0') }}',
                },
                totalBiaya() {
                    return parseInt(this.biaya.tetap) + parseInt(this.biaya.variabel) + parseInt(this.biaya.operasional) + parseInt(this.biaya.nonOperasional) + parseInt(this.biaya.pajak);
                },
                totalPenjualanBersih() {
                    return parseInt(this.penjualanBersih) * parseInt(this.hargaJualProduk);
                },
                nilaiKeuntunganBersih() {
                    return this.totalPenjualanBersih() - this.totalBiaya();
                },
            }">
                <div class="form-control">
                    <label for="" class="label">Penjualan Bersih</label>
                    <input type="number" min="0" class="input input-bordered"
                        placeholder="Total Penjualan Bersih" x-model="penjualanBersih" name="penjualan_bersih">
                    <div class="label label-text-alt">
                        <x-input-error :messages="$errors->get('penjualan_bersih')"></x-input-error>
                    </div>
                </div>
                <div class="form-control">
                    <label for="" class="label">Harga Jual Produk</label>
                    <input type="number" min="0" class="input input-bordered" placeholder="Harga Jual Produk"
                        x-model="hargaJualProduk" name="harga_jual_produk">
                    <div class="label label-text-alt">
                        <x-input-error :messages="$errors->get('harga_jual_produk')"></x-input-error>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-3">
                    <div class="form-control">
                        <label for="" class="label">Biaya Tetap</label>
                        <input type="number" min="0" class="input input-bordered max-w-xl"
                            placeholder="Biaya Tetap" x-model="biaya.tetap" name="biaya_tetap">
                        <div class="label label-text-alt">
                            <x-input-error :messages="$errors->get('biaya_tetap')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Biaya Variabel</label>
                        <input type="number" min="0" class="input input-bordered max-w-xl"
                            placeholder="Biaya Variabel" x-model="biaya.variabel" name="biaya_variabel">
                        <div class="label label-text-alt">
                            <x-input-error :messages="$errors->get('biaya_variabel')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Biaya Operasional</label>
                        <input type="number" min="0" class="input input-bordered max-w-xl"
                            placeholder="Biaya Operasional" x-model="biaya.operasional" name="biaya_operasional">
                        <div class="label label-text-alt">
                            <x-input-error :messages="$errors->get('biaya_operasional')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Biaya Non Operasional</label>
                        <input type="number" min="0" class="input input-bordered max-w-xl"
                            placeholder="Biaya Non Operasional" x-model="biaya.nonOperasional"
                            name="biaya_non_operasional">
                        <div class="label label-text-alt">
                            <x-input-error :messages="$errors->get('biaya_non_operasional')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Biaya Pajak</label>
                        <input type="number" min="0" class="input input-bordered max-w-xl"
                            placeholder="Biaya Pajak" x-model="biaya.pajak" name="biaya_pajak">
                        <div class="label label-text-alt">
                            <x-input-error :messages="$errors->get('biaya_pajak')"></x-input-error>
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <label for="" class="label">Total Biaya</label>
                    <input disabled type="number" min="0" class="input input-bordered" placeholder="Total Biaya"
                        x-bind:value="totalBiaya()">
                </div>
                <div class="form-control">
                    <label for="" class="label">Laporan Total Penjualan Bersih</label>
                    <input disabled type="number" min="0" class="input input-bordered"
                        placeholder="Laporan Total Penjualan Bersih" x-bind:value="totalPenjualanBersih()">
                </div>
                <div class="form-control">
                    <label for="" class="label">Nilai Keuntungan Bersih</label>
                    <input disabled type="number" min="0" class="input input-bordered"
                        placeholder="Nilai Keuntungan Bersih" x-bind:value="nilaiKeuntunganBersih()">
                </div>
            </div>
            <div class="mt-5 space-x-4">
                <button type="submit" class="btn btn-primary">Tambah Penjualan</button>
                <a href="{{ route('user.penjualan.index') }}" class="btn">Kembali</a>
            </div>
        </div>
    </form>
</x-app-layout>
