@extends('layout.menu')
@section('konten')

<body>
    <section class="py-12 mx-[104px]">
        <h1 class="text-9xl font-bold text-gray-900 text-center">
            <span class="text-orange-500">Home</span> is where your story begins
        </h1>
        <p class="mt-8 text-xl text-gray-600 text-center">
            We are here to help you find the perfect home that matches your needs, lifestyle, and budget. With a wide
            range of options, we make it easy for you to discover a place you'll love to call home.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-8">
            <img src="img/rumah1.jpg" alt="House" class="rounded-lg shadow-md">
            <img src="img/rumah1.jpg" alt="House" class="rounded-lg shadow-md">
            <img src="img/rumah1.jpg" alt="House" class="rounded-lg shadow-md">
            <img src="img/rumah1.jpg" alt="House" class="rounded-lg shadow-md">
        </div>
    </section>

    <section class="text-white body-font bg-[#6637EE]">
        <div class="mx-[104px]">
            <div class="container flex flex-wrap px-5 py-12 mx-auto items-center">
                <div
                    class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                    <h2 class="text-5xl font-bold">Trusted by the people across the Nation</h2>
                </div>
                <div class="flex flex-col md:w-1/2 md:pl-12">
                    <p class="max-w-xl mx-auto text-md">
                        "Your satisfaction is our top priority, and with our proven track record of delivering
                        exceptional service, you can trust that we are committed to guiding you through every step of
                        the process with transparency, integrity, and care."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font bg-white">
        <div class="mx-[104px]">
            <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center gap-12">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded h-[400px] w-[500px]" alt="hero" src="img/rumah1.jpg">
                </div>
                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h3 class="text-4xl font-bold text-gray-900">Providing the effective solutions for you</h3>
                    <p class="mt-4 text-gray-600">
                        "Your satisfaction is our top priority, and with our proven track record of delivering
                        exceptional service, you can trust that we are committed to guiding you through every step of
                        the process with transparency, integrity, and care."
                    </p>
                    <button class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">More About
                        Us</button>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="mx-[104px]">
            <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center gap-12">

                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h3 class="text-5xl font-bold text-gray-900">Ready to find your dream house?</h3>
                    <p class="mt-4 text-gray-600 max-w-xl ">
                        "We are committed to providing tailored solutions with complete transparency and
                        professionalism, ensuring a smooth and secure process so you can feel confident in every
                        decision."
                    </p>
                    <div class="mt-6 flex justify-center space-x-4">
                        <button class="px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Find
                            Home</button>
                        <button class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">Contact
                            Us</button>
                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded h-[400px] w-[500px]" alt="hero" src="img/rumah1.jpg">
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
