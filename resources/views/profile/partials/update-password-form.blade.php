<section>
    <form method="post" action="{{ route('password.update') }}" x-data="{
        showPassword: false,
    }">
        @csrf
        @method('put')

        <div class="form-control mt-8">
            <label for="current_password" class="label">
                Password Lamamu
            </label>
            <input x-bind:type="showPassword ? 'text' : 'password'" class="input input-bordered w-full"
                autocomplete="current-password" name="current_password">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="form-control">
            <label for="password" class="label">
                Password
            </label>
            <input x-bind:type="showPassword ? 'text' : 'password'" class="input input-bordered w-full"
                autocomplete="new-password" name="password">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="form-control">
            <label for="password_confirmation" class="label">
                Konfirmasi Password
            </label>
            <input x-bind:type="showPassword ? 'text' : 'password'" class="input input-bordered w-full"
                autocomplete="new-password" name="password_confirmation">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="form-control mt-5">
            <div for="" class="flex items-center">
                <input type="checkbox" class="toggle toggle-primary mr-3"
                    x-on:change="(e) => showPassword = e.currentTarget.checked" />
                Tampilkan Password
            </div>
        </div>

        <div class="flex items-center gap-4 mt-10">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
