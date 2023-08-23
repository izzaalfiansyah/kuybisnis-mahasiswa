<x-app-layout title="Edit Pengguna">
    <div class="card bg-white shadow">
        <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="card-body">
            @csrf
            @method('PUT')
            <div class="card-title">
                Edit Pengguna
            </div>

            <div class="mt-5">
                <div class="form-control">
                    <label for="" class="label">Email</label>
                    <input type="email" class="input input-bordered max-w-xl" name="email"
                        value="{{ old('email', $user->email) }}">
                    <div class="label label-alt-text">
                        <x-input-error :messages="$errors->get('email')"></x-input-error>
                    </div>
                </div>
                <div class="form-control">
                    <label for="" class="label">Nama</label>
                    <input type="text" class="input input-bordered" name="name"
                        value="{{ old('name', $user->name) }}">
                    <div class="label label-alt-text">
                        <x-input-error :messages="$errors->get('name')"></x-input-error>
                    </div>
                </div>
                <div class="form-control">
                    <label for="" class="label">Password</label>
                    <input type="text" class="input input-bordered max-w-xl" name="password"
                        value="{{ old('password') }}">
                    <div class="label label-alt-text">
                        <x-input-error :messages="$errors->get('password')"></x-input-error>
                    </div>
                </div>
                <div class="form-control">
                    <label for="" class="label">Role</label>
                    <select name="role" class="input input-bordered max-w-xl">
                        <option value="">Pilih Role</option>
                        <option {{ old('role', $user->role) == '1' ? 'selected' : '' }} value="1">Admin</option>
                        <option {{ old('role', $user->role) == '2' ? 'selected' : '' }} value="2">Mahasiswa
                        </option>
                    </select>
                    <div class="label label-alt-text">
                        <x-input-error :messages="$errors->get('role')"></x-input-error>
                    </div>
                </div>
                <div class="form-control mt-4">
                    <label for="" class="flex">
                        <input type="checkbox" name="verifikasi" class="toggle mr-3"
                            {{ $user->email_verified_at ? 'checked' : '' }}>
                        Verifikasi
                    </label>
                </div>
                <div class="mt-10 space-x-4">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('admin.user.index') }}" class="btn">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
