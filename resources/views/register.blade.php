@extends('layout.menu')
@section('konten')
    <div class="flex flex-col items-center justify-center px-6 mx-auto my-10 lg:py-0">
        <div class="w-full max-w-md bg-[#b0ab99] rounded-lg shadow-lg border">
            <div class="p-8 space-y-6">
                <h1 class="text-2xl text-white font-bold leading-tight text-center">
                    Create Your Account
                </h1>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register.submit') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block mb-2 text-sm font-medium text-white">Full Name</label>
                            <input type="text" name="nama" id="nama"
                                class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                                placeholder="Full Name" value="{{ old('nama') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-white">Email Address</label>
                            <input type="email" name="email" id="email"
                                class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                                placeholder="name@example.com" value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                            <input type="password" name="password" id="password"
                                class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                                placeholder="Enter Password" required>
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-white">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                                placeholder="Confirm Password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="block w-full p-3 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
                <p class="text-sm text-center text-white">
                    Already have account?
                    <a href="{{ route('login.index') }}"
                        class="font-medium text-white hover:underline ">Sign in</a>
                </p>
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
