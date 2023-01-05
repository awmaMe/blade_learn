@if ($message)
    <div
        class="bg-orange-100 border-orange-500 text-orange-700 px-4 py-2 fixed bottom-4 w-1/3 text-center inset-x-0 mx-auto rounded-md"
        role="alert"
    >
        <p>{{ $message }}</p>
    </div>
@endif
