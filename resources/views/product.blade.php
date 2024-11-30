@extends('layout.menu')
@section('konten')
    <div class="mx-20 mt-10">
        <!-- Header -->
        <div class="py-10 bg-black text-white rounded-3xl ">
            <h1 class="text-7xl font-semibold text-center">Product</h1>
        </div>

        <!-- Cards -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mx-36">
            <!-- Card 1 -->
            <div class="bg-black rounded-2xl shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <img src="img/rumah1.jpg" alt="House 1" class="w-full h-[200px] object-cover rounded-t-2xl">
                <div class="p-5 text-white">
                    <p class="text-lg font-semibold">Rumah Tipe A</p>
                    <p class="text-md font-semibold mt-1">Rp.1.000.000.000</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-black rounded-2xl shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <img src="img/rumah1.jpg" alt="House 2" class="w-full h-[200px] object-cover rounded-t-2xl">
                <div class="p-5 text-white">
                    <p class="text-lg font-semibold">Rumah Tipe B</p>
                    <p class="text-md font-semibold mt-1">Rp.1.500.000.000</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-black rounded-2xl shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <img src="img/rumah1.jpg" alt="House 3" class="w-full h-[200px] object-cover rounded-t-2xl">
                <div class="p-5 text-white">
                    <p class="text-lg font-semibold">Rumah Tipe C</p>
                    <p class="text-md font-semibold mt-1">Rp.2.000.000.000</p>
                </div>
            </div>
        </div>
    </div>
@endsection
