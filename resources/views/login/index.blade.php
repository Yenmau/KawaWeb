@extends('layout.menu')
@section('konten')
<div class="flex flex-col items-center justify-center px-6 mx-auto my-10 lg:py-0">
    <div class="w-full max-w-md bg-[#b0ab99] rounded-lg shadow-lg border">
        <div class="p-8 space-y-6">
            <h1 class="text-2xl font-bold leading-tight text-center text-white">
                Sign in to Your Account
            </h1>

            @if (session('error'))
            <div>
                {{ session('error') }}
            </div>
        @endif
        
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        

            <form class="space-y-6" action="/login/proses" method="post">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email Address</label>
                    <input type="email" name="email" id="email"
                        class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        placeholder="name@example.com" required>
                </div>
                <div class="relative">
                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                    <input type="password" name="password" id="password"
                        class="block w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        placeholder="••••••••" required>
                    <button type="button" id="togglePassword"
                        class="absolute right-3 top-10 text-gray-500 focus:outline-none">
                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <a href="#" class="text-sm text-white hover:underline ">Forgot password?</a>
                </div>
                <button type="submit" name="submit"
                    class="w-full px-5 py-3 text-white bg-[#FD5F0E] rounded-lg font-medium hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-[#FD5F0E]">
                    Sign In
                </button>
                <p class="text-sm text-center text-white">
                    Don’t have an account?
                    <a href="{{ route('regis.index') }}"
                        class="font-medium text-white hover:underline ">Sign up</a>
                </p>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 013.31-4.873m14.134 0A10.05 10.05 0 0121.542 12c-1.274 4.057-5.064 7-9.542 7a10.05 10.05 0 01-1.875-.175M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
            `;
        } else {
            passwordField.type = 'password';
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
            `;
        }
    });

</script>
@endsection
