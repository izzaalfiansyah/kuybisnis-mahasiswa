<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" x-data="{
        showPassword: false,
    }">
        @csrf

        <!-- Name -->
        <div class="form-control">
            <label for="" class="label">Nama</label>
            <input type="text" name="name" class="input input-bordered" value="{{ old('name') }}" required>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-control">
            <label for="" class="label">Email</label>
            <input type="email" name="email" class="input input-bordered" value="{{ old('email') }}" required
                autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-control">
            <label for="" class="label">Password</label>
            <input x-bind:type="showPassword ? 'text' : 'password'" class="input input-bordered" name="password"
                required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="form-control">
            <label for="" class="label">Konfirmasi Password</label>
            <input x-bind:type="showPassword ? 'text' : 'password'" class="input input-bordered"
                name="password_confirmation" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4 flex items-center">
            <input type="checkbox" class="toggle toggle-primary mr-3"
                x-on:change="(e) => showPassword = e.currentTarget.checked">
            Tampilkan password
        </div>

        <button type="submit" class="btn btn-primary w-full mt-5">Daftar</button>

        <div class="mt-4 text-center">Sudah punya akun? login di <a href="{{ route('login') }}"
                class="text-primary">sini</a></div>
    </form>
</x-guest-layout>
