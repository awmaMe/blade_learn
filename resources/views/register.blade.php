<x-layout.main>
    <section class="flex flex-col items-center justify-center h-screen bg-teal-100">
        <div class="w-1/2 text-center">
            <h1>Sign Up</h1>
            <form
                action="sign-up"
                method="POST"
            >
                @csrf
                <x-form.input-field
                    type="text"
                    name="name"
                />
                <x-form.input-field
                    type="email"
                    name="email"
                />
                <x-form.input-field
                    type="text"
                    name="username"
                />
                <x-form.input-field
                    type="password"
                    name="password"
                />
                <x-form.input-field
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirm Password"
                />
                <x-form.submit-button label="Submit" />
            </form>
        </div>
    </section>
</x-layout.main>
