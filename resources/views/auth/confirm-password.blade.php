<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Silahkan konfirmasi password anda sebelum melanjutkan sesi.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

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

        <div class="mt-4">
            <button type="submit" class="btn btn-primary w-full">Konfirmasi Password</button>
        </div>
    </form>
</x-guest-layout>
