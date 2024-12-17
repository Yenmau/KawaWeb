<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="/img/kawa.png">
    <title>PT Kawa Sejahtera Mandiri</title>
</head>

<nav class="bg-[#FFFAE9] py-4">
    <div class="grid grid-cols-3 gap-4 items-center mx-auto px-6 md:px-[104px]">
        <!-- Logo dan Nama -->
        <a class="flex gap-4 items-center" href="{{ route('home.index') }}" aria-label="Homepage">
            <img src="/img/kawa.png" width="50" height="50" alt="Kawa Logo">
            <h1 class="text-xl font-semibold">Kawa Sejahtera Mandiri</h1>
        </a>

        <!-- Menu Navigasi -->
        <div class="col-span-1 flex justify-center gap-8 font-medium text-lg">
            <a href="{{ route('home.index') }}" 
               class="{{ Route::is('home.index') ? 'font-bold text-[#FD5F0E]' : '' }}">
                Home
            </a>
            <a href="{{ route('property.index') }}" 
               class="{{ Route::is('property.index') ? 'font-bold text-[#FD5F0E]' : '' }}">
                Property
            </a>
            <a href="{{ route('about.index') }}" 
               class="{{ Route::is('about.index') ? 'font-bold text-[#FD5F0E]' : '' }}">
                About
            </a>
        </div>

        <!-- User Info dan Login -->
        <div class="flex justify-end items-center gap-4">
            @auth
                <h1 class="hidden md:block text-lg">Hi, <span class="font-bold">{{ Auth::user()->nama }}</span></h1>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" 
                        class="bg-[#FD5F0E] px-5 py-2 rounded-lg text-white text-lg">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login.index') }}" 
                   class="bg-[#FD5F0E] px-5 py-2 rounded-lg text-white text-lg">
                    Login
                </a>
            @endauth
        </div>
    </div>
</nav>

<body class="bg-[#FFFAE9]">
    @yield('konten')
</body>

<footer class="bg-gray-900 text-white py-8">
    <div class="mx-[104px]">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">
            <div>
                <h4 class="text-lg font-bold">Kawa Sejahtera Mandiri</h4>
                <p class="mt-2 text-sm">
                    We help you find your dream home with transparency, professionalism, and care. Your satisfaction is
                    our priority.
                </p>
            </div>
            <div>
                <h4 class="text-lg font-bold">Quick Links</h4>
                <ul class="mt-2 space-y-2">
                    <li><a href="#" class="text-purple-400 hover:text-purple-300">Home</a></li>
                    <li><a href="#" class="text-purple-400 hover:text-purple-300">Properties</a></li>
                    <li><a href="#" class="text-purple-400 hover:text-purple-300">About</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold">Contact Us</h4>
                <ul class="mt-2 space-y-2 text-sm">
                    <li>Email: <a href="mailto:info@kawa.com"
                            class="text-purple-400 hover:text-purple-300">info@kawa.com</a></li>
                    <li>Phone: <a href="tel:+1234567890" class="text-purple-400 hover:text-purple-300">+123 456 7890</a>
                    </li>
                    <li>Address: Jl. Example No.123, City</li>
                </ul>
            </div>
        </div>
        <div class="mt-8 text-center text-xs text-gray-400">
            &copy; 2024 Kawa Sejahtera Mandiri. All rights reserved.
        </div>
    </div>
</footer>


</html>
