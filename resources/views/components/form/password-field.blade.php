<div class="my-4 flex flex-col items-center">
    <div class="relative flex items-center">
        <input
            type="password"
            name="password"
            id="login-password"
            placeholder="Password"
            class="focus:outline-none px-4 py-2 text-xs rounded-md"
        >
        <span
            id="toggle-password"
            class="absolute text-xs right-2 text-gray-500 cursor-pointer"
            onclick="togglePassword()"
        >Show</span>
    </div>
    <p class="text-xs text-red-600">
        @error($name)
            {{ $message }}
        @enderror
    </p>
</div>

<script>
    function togglePassword() {
        let toggler = document.getElementById('toggle-password');
        let passwordInput = document.getElementById('login-password');

        if (toggler.innerHTML == 'Show') {
            passwordInput.type = 'text';
            toggler.innerHTML = 'Hide';
        } else {
            passwordInput.type = 'password';
            toggler.innerHTML = 'Show';
        }
    }
</script>
