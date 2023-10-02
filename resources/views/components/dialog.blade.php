@props(['id', 'header', 'class'])

<dialog id="{{ $id }}" class="modal">
    <div class="modal-box {{ isset($class) ? $class : '' }}">
        @if (isset($header))
            <h3 class="font-bold text-lg mb-5">{{ $header }}</h3>
        @endif
        {{ $slot }}
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
