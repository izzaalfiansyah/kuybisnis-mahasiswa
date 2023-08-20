<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}" x-data="{
        showPassword: false,
    }">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-control">
            <label for="" class="label">Email</label>
            <input type="email" name="email" class="input input-bordered" value="{{ old('email', $request->email) }}"
                required autocomplete="username" autofocus>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-control">
            <label for="" class="label">Password</label>
            <input x-bind:type="showPassword ? 'text' : 'password'" name="password" class="input input-bordered"
                required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-control">
            <label for="" class="label">Konfirmasi Password</label>
            <input x-bind:type="showPassword ? 'text' : 'password'" name="password_confirmation"
                class="input input-bordered" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4 flex items-center">
            <input type="checkbox" class="toggle toggle-primary mr-3"
                x-on:change="(e) => showPassword = e.currentTarget.checked">
            Tampilkan password
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary w-full">Reset Password</button>
        </div>
    </form>
</x-guest-layout>
