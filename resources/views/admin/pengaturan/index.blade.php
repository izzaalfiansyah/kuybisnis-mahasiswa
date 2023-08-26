<x-app-layout title="Pengaturan">
    <div class="space-y-5">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.pengaturan.store') }}"
            class="card bg-white shadow">
            @csrf
            <div class="card-body">
                <div class="card-title mb-5">Pengaturan Aplikasi</div>

                <div class="form-control">
                    <label for="" class="label">Nama Aplikasi</label>
                    <input type="text" class="input input-bordered max-w-xl" name="nama_aplikasi"
                        placeholder="Nama Aplikasi" value="{{ old('nama_aplikasi', $pengaturan?->nama_aplikasi) }}">
                    <div class="label label-alt-text">
                        <x-input-error :messages="$errors->get('nama_aplikasi')"></x-input-error>
                    </div>
                </div>

                <div class="form-control">
                    <label for="" class="label">Logo Aplikasi</label>
                    <input type="file" accept="image/*" class="file-input file-input-bordered max-w-xl"
                        name="logo_aplikasi">
                    <div class="label label-alt-text">
                        <x-input-error :messages="$errors->get('logo_aplikasi')"></x-input-error>
                    </div>
                </div>

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
        </form>

        @if ($pengaturan)
            <form method="POST" action="{{ route('admin.pengaturan.email.store') }}" class="card bg-white shadow">
                @csrf
                <div class="card-body">
                    <div class="card-title mb-5">Pengaturan Email SMTP</div>
                    <div class="form-control">
                        <label for="" class="label">Host</label>
                        <input type="text" class="input input-bordered" name="host"
                            value="{{ old('host', $pengaturan?->mail_host) }}">
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('host')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Port</label>
                        <input type="text" class="input input-bordered" name="port"
                            value="{{ old('port', $pengaturan?->mail_port) }}">
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('port')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Username</label>
                        <input type="text" class="input input-bordered" name="username"
                            value="{{ old('username', $pengaturan?->mail_username) }}">
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('username')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Password</label>
                        <input type="text" class="input input-bordered" name="password"
                            value="{{ old('password', $pengaturan?->mail_password) }}">
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('password')"></x-input-error>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">Enrkipsi</label>
                        <input type="text" class="input input-bordered" name="enrkipsi"
                            value="{{ old('enrkipsi', $pengaturan?->mail_enrkipsi) }}">
                        <div class="label label-alt-text">
                            <x-input-error :messages="$errors->get('enrkipsi')"></x-input-error>
                        </div>
                    </div>
                    <div class="mt-8">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        @endif
    </div>
</x-app-layout>
