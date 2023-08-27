<x-app-layout title="Tambah Tim">
    <form method="POST" action="{{ route('admin.team.update', $team->id) }}" class="card bg-white shadow"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="card-title mb-5">Edit Tim</div>

            <div class="form-control">
                <label for="" class="label">Nama</label>
                <input type="text" class="input input-bordered max-w-xl" name="nama"
                    value="{{ old('nama', $team->nama) }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('nama')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Jabatan</label>
                <input type="text" class="input input-bordered max-w-xl" name="jabatan"
                    value="{{ old('jabatan', $team->jabatan) }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('jabatan')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Foto</label>
                <input type="file" class="file-input file-input-bordered max-w-xl" name="foto" accept="image/*">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('foto')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Akun Instagram</label>
                <input type="text" class="input input-bordered max-w-xl" name="akun_instagram"
                    value="{{ old('akun_instagram', $team->akun_instagram) }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('akun_instagram')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Akun Twitter</label>
                <input type="text" class="input input-bordered max-w-xl" name="akun_twitter"
                    value="{{ old('akun_twitter', $team->akun_twitter) }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('akun_twitter')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Akun Facebook</label>
                <input type="text" class="input input-bordered max-w-xl" name="akun_facebook"
                    value="{{ old('akun_facebook', $team->akun_facebook) }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('akun_facebook')"></x-input-error>
                </div>
            </div>

            <div class="flex space-x-4 flex-wrap mt-10">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.team.index') }}" class="btn">Kembali</a>
            </div>
        </div>
    </form>
</x-app-layout>
