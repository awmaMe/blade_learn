<div class="my-4 md:grid md:grid-cols-4">
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        class="focus:outline-none col-span-3"
    >
</div>
