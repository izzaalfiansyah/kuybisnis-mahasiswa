<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-control">
            <label for="" class="label">Email</label>
            <input type="text" autocomplete="username" name="email" required class="input input-bordered"
                value="{{ old('email') }}">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-control" x-data="{
            showPassword: false,
        }">
            <label for="" class="label">Password</label>
            <div class="relative">
                <input x-bind:type="showPassword ? 'text' : 'password'" name="password" autocomplete="current-password"
                    required class="input input-bordered w-full">
                <button type="button" class="flex items-center px-3 absolute top-0 right-0 bottom-0 text-gray-500"
                    x-on:click="(e) => showPassword = !showPassword">
                    <i class="material-icons" x-html="showPassword ? 'visibility' : 'visibility_off'"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 flex justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="checkbox checkbox-primary checkbox-sm" name="remember">
                <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    Lupa password?
                </a>
            @endif
        </div>

        <div class="flex items-center justify-end mt-4">

            <button type="submit" class="btn btn-primary w-full">Masuk</button>
        </div>

        <div class="mt-4 text-center">
            Belum punya akun? register di <a href="{{ route('register') }}" class="text-primary">sini</a>
        </div>
    </form>
</x-guest-layout>
