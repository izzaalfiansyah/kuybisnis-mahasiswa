@props(['id'])

<dialog id="{{ $id }}" class="modal">
    {{ $slot }}
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
