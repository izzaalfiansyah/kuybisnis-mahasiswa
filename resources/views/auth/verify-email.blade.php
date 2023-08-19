<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Terima kasih telah mendaftar di aplikasi! Sebelum memulai, kamu harus memverifikasi akun email terlebih dahulu
        hanya dengan mengeklik email yang telah kami kirimkan. Jika kamu belum menerima email, kami akan mengirimkan
        email verifikasi baru.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            Email link verifikasi telah dikirimkan kepada email anda ketika registrasi
        </div>
    @endif

    <div class="mt-8 flex items-center justify-between">
        <form class="inline" method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button type="submit" class="btn btn-primary w-full">Kirim Email Verifikasi Lagi</button>
            </div>
        </form>

        <form class="inline" method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn w-full">Logout</button>
        </form>
    </div>
</x-guest-layout>
