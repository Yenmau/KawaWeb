@extends('layout.menu')
@section('konten')
    <div class="flex flex-col items-center justify-center px-6 mx-auto my-10 lg:py-0">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg border">
            <div class="p-8 space-y-6">
                <h1 class="text-2xl font-bold leading-tight text-center">
                    Create Your Account
                </h1>
                <form class="space-y-6" action="#">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" id="name"
                            class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="John Doe" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="email"
                            class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="relative">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password"
                            class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="••••••••" required>
                    </div>
                    <div class="relative">
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-700">Confirm
                            Password</label>
                        <input type="password" name="confirm-password" id="confirm-password"
                            class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="••••••••" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('login.index') }}"
                            class="text-sm text-blue-600 hover:underline dark:text-blue-500">Already have an account?</a>
                    </div>
                    <button type="submit"
                        class="w-full px-5 py-3 text-white bg-blue-600 rounded-lg font-medium hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-600">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword')?.addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const confirmPasswordField = document.getElementById('confirm-password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                confirmPasswordField.type = 'text';
                eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 013.31-4.873m14.134 0A10.05 10.05 0 0121.542 12c-1.274 4.057-5.064 7-9.542 7a10.05 10.05 0 01-1.875-.175M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
            `;
            } else {
                passwordField.type = 'password';
                confirmPasswordField.type = 'password';
                eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
            `;
            }
        });
    </script>
@endsection
