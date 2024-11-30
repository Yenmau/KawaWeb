<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Template</title>
</head>
<nav class="bg-[#CEDEEB] h-[100px]">
    <div class="grid grid-cols-3 gap-2 p-2 h-full mx-10">
        <a class="flex ml-12 gap-2 items-center " href="{{ route('home.index') }}">
            <img src="/img/kawa.png" width="50px" height="50px" alt="logo">
            <h1 class="text-2xl font-semibold">Kawa Sejahtera Mandiri</h1>
        </a>

        <div class="col-span-1 flex justify-center gap-16 font-regular text-xl items-center">
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

            <div class="">Login</div>
        </a>
    </div>
</nav>

<body class="">
    @yield('konten')
</body>

</html>
