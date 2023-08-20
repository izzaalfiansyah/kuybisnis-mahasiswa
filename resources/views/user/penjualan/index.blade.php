<x-app-layout>
    <div class="card bg-white shadow">
        <div class="card-body">
            <div class="card-title">Penjualan</div>
            <div x-data="{
                totalPenjualan: 0,
                hargaJual: 0,
                biaya: {
                    tetap: 0,
                    variabel: 0,
                    operasional: 0,
                    nonOperasional: 0,
                    pajak: 0
                },
                totalBiaya() {
                    return parseInt(this.biaya.tetap) + parseInt(this.biaya.variabel) + parseInt(this.biaya.operasional) + parseInt(this.biaya.nonOperasional) + parseInt(this.biaya.pajak);
                },
                totalPenjualanBersih() {
                    return parseInt(this.totalPenjualan) * parseInt(this.hargaJual);
                },
                nilaiKeuntunganBersih() {
                    return this.totalPenjualanBersih() - this.totalBiaya();
                },
            }">
                <div class="form-control">
                    <label for="" class="label">Total Penjualan Bersih</label>
                    <input type="number" class="input input-bordered" placeholder="Total Penjualan Bersih"
                        x-model="totalPenjualan">
                </div>
                <div class="form-control">
                    <label for="" class="label">Harga Jual Produk</label>
                    <input type="number" class="input input-bordered" placeholder="Harga Jual Produk"
                        x-model="hargaJual">
                </div>
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-3">
                    <div class="form-control">
                        <label for="" class="label">Biaya Tetap</label>
                        <input type="number" class="input input-bordered max-w-xl" placeholder="Biaya Tetap"
                            x-model="biaya.tetap">
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Biaya Variabel</label>
                        <input type="number" class="input input-bordered max-w-xl" placeholder="Biaya Variabel"
                            x-model="biaya.variabel">
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Biaya Operasional</label>
                        <input type="number" class="input input-bordered max-w-xl" placeholder="Biaya Operasional"
                            x-model="biaya.operasional">
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Biaya Non Operasional</label>
                        <input type="number" class="input input-bordered max-w-xl" placeholder="Biaya Non Operasional"
                            x-model="biaya.nonOperasional">
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Biaya Pajak</label>
                        <input type="number" class="input input-bordered max-w-xl" placeholder="Biaya Pajak"
                            x-model="biaya.pajak">
                    </div>
                </div>
                <div class="form-control">
                    <label for="" class="label">Total Biaya</label>
                    <input disabled type="number" class="input input-bordered" placeholder="Total Biaya"
                        x-bind:value="totalBiaya()">
                </div>
                <div class="form-control">
                    <label for="" class="label">Laporan Total Penjualan Bersih</label>
                    <input disabled type="number" class="input input-bordered"
                        placeholder="Laporan Total Penjualan Bersih" x-bind:value="totalPenjualanBersih()">
                </div>
                <div class="form-control">
                    <label for="" class="label">Nilai Keuntungan Bersih</label>
                    <input disabled type="number" class="input input-bordered" placeholder="Nilai Keuntungan Bersih"
                        x-bind:value="nilaiKeuntunganBersih()">
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</x-app-layout>
