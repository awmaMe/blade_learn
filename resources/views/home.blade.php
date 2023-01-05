<x-layout.main>
    <section class="flex flex-col justify-center h-screen items-center bg-blue-100">
        <h1>LOG-IN</h1>
        <form
            action="login"
            method="POST"
            class="w-1/2"
        >
            @csrf
            <x-form.input-field
                type="text"
                name="identifier"
                placeholder="Email / Username"
            />
            <x-form.password-field
                type="password"
                name="password"
            />
            <div class="text-center">
                <x-form.submit-button label="Log-in" />
            </div>
        </form>
        <a
            class="bg-neutral-400 my-4 px-4 py-1 w-24 rounded-md "
            href="{{ route('register') }}"
        >Sign Up</a>
    </section>
</x-layout.main>
