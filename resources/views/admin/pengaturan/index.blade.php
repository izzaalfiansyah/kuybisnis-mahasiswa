<x-app-layout title="Pengaturan">
    <div class="card bg-white shadow">
        <div class="card-body">
            <div class="card-title mb-5">Pengaturan</div>

            <div class="form-control">
                <label for="" class="label">Video Homepage</label>
                <input type="text" placeholder="Link Video Homepage" class="input input-bordered"
                    name="link_video_homepage"
                    value="{{ old('link_video_homepage', $pengaturan?->link_video_homepage) }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('link_video_homepage')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Video Bisnis Plan</label>
                <input type="text" placeholder="Link Video Bisnis Plan" class="input input-bordered"
                    name="link_video_bisnis_plan"
                    value="{{ old('link_video_bisnis_plan', $pengaturan?->link_video_bisnis_plan) }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('link_video_bisnis_plan')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Video Strategi Marketing</label>
                <input type="text" placeholder="Link Video Strategi Marketing" class="input input-bordered"
                    name="link_video_strategi_marketing"
                    value="{{ old('link_video_strategi_marketing', $pengaturan?->link_video_strategi_marketing) }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('link_video_strategi_marketing')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Video Hasil Akhir Kegiatan</label>
                <input type="text" placeholder="Link Video Hasil Akhir Kegiatan" class="input input-bordered"
                    name="link_video_hasil_akhir_kegiatan"
                    value="{{ old('link_video_hasil_akhir_kegiatan', $pengaturan?->link_video_hasil_akhir_kegiatan) }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('link_video_hasil_akhir_kegiatan')"></x-input-error>
                </div>
            </div>

            <div class="mt-10">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</x-app-layout>
