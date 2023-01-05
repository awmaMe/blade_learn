<div class="my-4 flex flex-col items-center">
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder ?? ucwords($name) }}"
        class="focus:outline-none px-4 py-2 text-xs rounded-md"
    >
    <p class="text-xs text-red-600">
        @error($name)
            {{ $message }}
        @enderror
    </p>
</div>
