<x-app-layout title="Kewirausahaan">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="card-title mb-5">Video Motivasi</div>
                <div class="h-72"></div>
            </div>
        </div>
        @if (request()->user()->kelompok?->id)
            <div class="card bg-white shadow">
                <div class="card-body">
                    <div class="card-title mb-5">Plan Bisnis</div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Kategori Usaha</label>
                        <select class="input input-bordered max-w-xl">
                            <option value="">Pilih Kategori Usaha</option>
                        </select>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Nama Produk</label>
                        <input type="text" class="input input-bordered"
                            placeholder="Nama produk yang akan dipasarkan">
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Legalitas Usaha</label>
                        <input type="file" class="file-input file-input-bordered max-w-xl">
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Value Proposition</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Manfaat bisnis bagi konsumen"></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Customer Segments</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Segmentasi Konsumen"></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Customer Relationship</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Hubungan Konsumen"></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Channels</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Saluran"></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Key Activities</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Aktifitas Utama"></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Key Resources</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Sumberdaya Utama"></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Key Partners</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Mitra Utama"></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Cost Structures</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Struktur Biaya"></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Revenue Streams</label>
                        <textarea rows="5" class="textarea textarea-bordered resize-none" placeholder="Arus Pendapatan"></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="" class="label">Foto Produk</label>
                        <input type="file" multiple class="file-input file-input-bordered">
                    </div>
                    <div class="mt-10">
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        @else
            <x-no-kelompok></x-no-kelompok>
        @endif
    </div>
</x-app-layout>
