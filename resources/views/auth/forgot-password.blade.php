<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Lupa password kamu? Tidak masalah. Izinkan kami mengetahui email kamu dan kami akan mengirimkan kamu email untuk
        link reset password yang akan mengarahkanmu untuk membuat password baru.
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-control">
            <label for="" class="label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="input input-bordered" required
                autofocus autocomplete="email">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="btn btn-primary w-full">Kirim Link Reset Password</button>
        </div>
    </form>
</x-guest-layout>
