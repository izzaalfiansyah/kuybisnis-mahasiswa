<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Hapus Akun
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Setelah akun kamu terhapus, semua data yang tersimpan di aplikasi juga akan terhapus permanen. Sebelum
            menghapus akun, pikirkan terlebih dahulu matang-matang data kamu yang ada di aplikasi.
        </p>
    </header>

    <button type="button" class="btn bg-red-500 btn-warning text-white" onclick="user_delete.showModal()">Hapus
        Akun</button>
</section>

<x-dialog id="user_delete">
    <form method="post" action="{{ route('profile.destroy') }}" class="modal-box">
        @csrf
        @method('delete')

        <h2 class="text-lg font-medium text-gray-900">
            Kamu yakin untuk penghapusan akun kamu?
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Setelah akun kamu terhapus, semua data yang tersimpan di aplikasi juga akan terhapus permanen. Masukkan
            password anda untuk mengkonfirmasi bahwa ini benar-benar kamu.
        </p>

        <div class="mt-6">
            <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

            <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                placeholder="{{ __('Password') }}" />

            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-danger-button class="ml-3">
                Hapus Akun
            </x-danger-button>
        </div>
    </form>
</x-dialog>
