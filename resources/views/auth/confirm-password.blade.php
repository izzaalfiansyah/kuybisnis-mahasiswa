<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Silahkan konfirmasi password anda sebelum melanjutkan sesi.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary w-full">Konfirmasi Password</button>
        </div>
    </form>
</x-guest-layout>
