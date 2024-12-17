@extends('layout.menu')
@section('konten')

<section class="pt-6 mx-[104px]">
  <h1 class="text-8xl font-bold text-gray-900 text-center">
      <span class="text-orange-500">Rumah</span> Baru
  </h1>
  <p class="mt-4 text-xl text-gray-600 text-center">
    Here is some information about company and sturcture team
  </p>
</section>

<section class="text-gray-600 body-font pb-6">
  <div class="mx-[104px]">
      <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center gap-12">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
              <img class="object-cover object-center rounded h-[400px] w-[500px]" alt="hero" src="/img/rumah3.jpg">
          </div>
          <div
              class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
              <h3 class="text-6xl font-bold text-gray-900">Rumah Baru</h3>
              <p class="mt-4 text-gray-600">
                  "Your satisfaction is our top priority, and with our proven track record of delivering
                  exceptional service, you can trust that we are committed to guiding you through every step of
                  the process with transparency, integrity, and care."
              </p>
              <button class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Call for best
                  Us</button>
          </div>
      </div>
  </div>
</section>


@endsection