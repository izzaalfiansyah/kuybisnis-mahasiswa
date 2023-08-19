<x-app-layout>
    <div class="flex flex-col gap-y-5">
        <div class="card shadow bg-white">
            <div class="card-body max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="card shadow bg-white">
            <div class="card-body max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="card shadow bg-white">
            <div class="card-body max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
