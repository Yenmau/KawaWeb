<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kawa</title>
</head>
<nav class="bg-[#FFFAE9] py-4">
    <div class="grid grid-cols-3 gap-2 h-full mx-[104px]">
        <a class="flex ml-12 gap-4 items-center " href="{{ route('home.index') }}">
            <img src="/img/kawa.png" width="50px" height="50px" alt="logo">
            <h1 class="text-xl font-semibold">Kawa Sejahtera Mandiri</h1>
        </a>

        <div class="col-span-1 flex justify-center gap-16 font-regular text-lg items-center">
            <a href="{{ route('home.index') }}" class="{{ Route::is('home.index') ? 'font-bold' : '' }}">
                Home
            </a>
            <a href="{{ route('product.index') }}" class="{{ Route::is('product.index') ? 'font-bold' : '' }}">
                Product
            </a>
            <a href="{{ route('about.index') }}" class="{{ Route::is('about.index') ? 'font-bold' : '' }}">
                About
            </a>
        </div>


        <a class="col-span-1 flex justify-end font-semibold text-2xl items-center mr-12 " href="{{route('login.index')}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-6 mr-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>

            <div class="bg-[#FD5F0E] px-5 py-2 rounded-lg text-white text-lg">Login</div>
        </a>
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
          We help you find your dream home with transparency, professionalism, and care. Your satisfaction is our priority.
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
          <li>Email: <a href="mailto:info@kawa.com" class="text-purple-400 hover:text-purple-300">info@kawa.com</a></li>
          <li>Phone: <a href="tel:+1234567890" class="text-purple-400 hover:text-purple-300">+123 456 7890</a></li>
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
