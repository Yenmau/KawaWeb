@extends('layout.menu')
@section('konten')

<section class="pt-6 mx-[104px]">
    <h1 class="text-8xl font-bold text-gray-900 text-center">
        All <span class="text-orange-500">Properties</span>
    </h1>
    <p class="mt-4 text-xl text-gray-600 text-center">
        Huge number of properties available here for buy and sell
    </p>
</section>

<section class="text-gray-400 body-font">
    <div class="mx-[104px]">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-800 rounded overflow-hidden">
                    <div class="w-24 h-full bg-[#6637EE]"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-6">
                    <h1 class="sm:w-2/5 text-[#6637EE] font-medium title-font text-2xl mb-2 sm:mb-0">
                        Comfortable Living, Bright Future</h1>
                    <p class="sm:w-3/5 leading-relaxed text-base text-black sm:pl-10 pl-0">The best investment for your
                        family. Enjoy a serene environment, complete facilities, and easy access to the city center.</p>
                </div>
            </div>
            <div class="flex flex-auto gap-4 sm:-m-4 -mx-4 -mb-10 -mt-4 ">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6 bg-[#b0ab99] rounded-lg">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="img/rumah1.jpg">
                    </div>
                    <h2 class="text-3xl font-medium title-font text-white mt-5">Shooting Stars</h2>
                    <p class="text-base text-white/80 leading-relaxed mt-2">Swag shoindxgoitch literally meditation
                        subway tile tumblr
                        cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                    <a
                        class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 inline-flex items-center mt-3">Learn
                        More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6 bg-[#b0ab99] rounded-lg">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="img/rumah1.jpg">
                    </div>
                    <h2 class="text-3xl font-medium title-font text-white mt-5">The Catalyzer</h2>
                    <p class="text-base text-white/80 leading-relaxed mt-2">Swag shoindxigoitch literally meditation
                        subway tile
                        tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.
                    </p>
                    <a
                        class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 inline-flex items-center mt-3">Learn
                        More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6 bg-[#b0ab99] rounded-lg">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="img/rumah1.jpg">
                    </div>
                    <h2 class="text-3xl font-medium title-font text-white mt-5">The 400 Blows</h2>
                    <p class="text-base text-white/80 leading-relaxed mt-2">Swag shoindegoitch literally meditation
                        subway tile tumblr
                        cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                    <a
                        class="inline-flex items-center mt-3 mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Learn
                        More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

            </div>
            <div class="mb-8"></div>
            <div class="flex flex-auto gap-4 sm:-m-4 -mx-4 -mb-10 -mt-4 my-8">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6 bg-[#b0ab99] rounded-lg">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="img/rumah1.jpg">
                    </div>
                    <h2 class="text-3xl font-medium title-font text-white mt-5">Rumah Baru</h2>
                    <p class="text-base text-white/80 leading-relaxed mt-2">Swag shoindxgoitch literally meditation
                        subway tile tumblr
                        cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                    <a href="{{ route('detail.index') }}"
                        class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 inline-flex items-center mt-3">Learn
                        More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6 bg-[#b0ab99] rounded-lg">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="img/rumah1.jpg">
                    </div>
                    <h2 class="text-3xl font-medium title-font text-white mt-5">The Catalyzer</h2>
                    <p class="text-base text-white/80 leading-relaxed mt-2">Swag shoindxigoitch literally meditation
                        subway tile
                        tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.
                    </p>
                    <a
                        class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 inline-flex items-center mt-3">Learn
                        More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6 bg-[#b0ab99] rounded-lg">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="img/rumah1.jpg">
                    </div>
                    <h2 class="text-3xl font-medium title-font text-white mt-5">The 400 Blows</h2>
                    <p class="text-base text-white/80 leading-relaxed mt-2">Swag shoindegoitch literally meditation
                        subway tile tumblr
                        cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                    <a
                        class="inline-flex items-center mt-3 mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Learn
                        More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

            </div>
            <div class="mb-8"></div>
            <div class="flex flex-auto gap-4 sm:-m-4 -mx-4 -mb-10 -mt-4 my-8">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6 bg-[#b0ab99] rounded-lg">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="img/rumah1.jpg">
                    </div>
                    <h2 class="text-3xl font-medium title-font text-white mt-5">Shooting Stars</h2>
                    <p class="text-base text-white/80 leading-relaxed mt-2">Swag shoindxgoitch literally meditation
                        subway tile tumblr
                        cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                    <a
                        class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 inline-flex items-center mt-3">Learn
                        More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6 bg-[#b0ab99] rounded-lg">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="img/rumah1.jpg">
                    </div>
                    <h2 class="text-3xl font-medium title-font text-white mt-5">The Catalyzer</h2>
                    <p class="text-base text-white/80 leading-relaxed mt-2">Swag shoindxigoitch literally meditation
                        subway tile
                        tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.
                    </p>
                    <a
                        class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 inline-flex items-center mt-3">Learn
                        More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6 bg-[#b0ab99] rounded-lg">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="img/rumah1.jpg">
                    </div>
                    <h2 class="text-3xl font-medium title-font text-white mt-5">The 400 Blows</h2>
                    <p class="text-base text-white/80 leading-relaxed mt-2">Swag shoindegoitch literally meditation
                        subway tile tumblr
                        cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                    <a
                        class="inline-flex items-center mt-3 mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Learn
                        More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

            </div>


        </div>
    </div>
</section>

@endsection
