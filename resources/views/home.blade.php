<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section>
    <div class="relative container px-4 mx-auto">
        <div class="max-w-xl xl:max-w-4xl">
          <h1 class="font-heading text-5xl xs:text-6xl md:text-8xl xl:text-10xl font-bold text-gray-900 mb-8 sm:mb-14">
            <span>World Best Tech Startup</span>
            <span class="font-serif italic">Ever</span>
          </h1>
          <div class="md:flex mb-14 max-w-xs sm:max-w-sm md:max-w-none">
            <div class="mb-6 md:mb-0 md:mr-8 pt-3">
              <svg width="84" height="10" viewbox="0 0 84 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 4.25C0.585786 4.25 0.25 4.58579 0.25 5C0.25 5.41421 0.585786 5.75 1 5.75L1 4.25ZM84 5.00001L76.5 0.669879L76.5 9.33013L84 5.00001ZM1 5.75L77.25 5.75001L77.25 4.25001L1 4.25L1 5.75Z" fill="#1E254C"></path>
              </svg>
            </div>
            <div class="max-w-md">
              <p class="md:text-xl text-gray-900 font-semibold">Saturn is a startup that's making the world a better place! We've been working on our mission since 2021</p>
            </div>
          </div>
          <a class="relative group inline-block w-full sm:w-auto py-4 px-6 mb-24 text-white font-semibold rounded-md bg-orange-900 overflow-hidden" href="#">
            <div class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
            <div class="relative flex items-center justify-center">
              <span class="mr-4">Meet The Expert</span>
              <span>
                <svg width="8" height="12" viewbox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.83 5.29L2.59 1.05C2.49704 0.956274 2.38644 0.881879 2.26458 0.83111C2.14272 0.780342 2.01202 0.754204 1.88 0.754204C1.74799 0.754204 1.61729 0.780342 1.49543 0.83111C1.37357 0.881879 1.26297 0.956274 1.17 1.05C0.983753 1.23736 0.879211 1.49082 0.879211 1.755C0.879211 2.01919 0.983753 2.27264 1.17 2.46L4.71 6L1.17 9.54C0.983753 9.72736 0.879211 9.98082 0.879211 10.245C0.879211 10.5092 0.983753 10.7626 1.17 10.95C1.26344 11.0427 1.37426 11.116 1.4961 11.1658C1.61794 11.2155 1.7484 11.2408 1.88 11.24C2.01161 11.2408 2.14207 11.2155 2.26391 11.1658C2.38575 11.116 2.49656 11.0427 2.59 10.95L6.83 6.71C6.92373 6.61704 6.99813 6.50644 7.04889 6.38458C7.09966 6.26272 7.1258 6.13201 7.1258 6C7.1258 5.86799 7.09966 5.73728 7.04889 5.61543C6.99813 5.49357 6.92373 5.38297 6.83 5.29Z" fill="#FFF2EE"></path>
                </svg>
              </span>
            </div>
          </a>
        </div>
        <div class="lg:flex">
          <div class="max-w-2xl mb-20 lg:mb-0 lg:mr-32">
            <span class="block mb-6 text-sm font-semibold text-gray-500">TRUSTED BY BIG COMPANIES</span>
            <div class="flex items-center -mx-4">
              <div class="w-1/3 px-4">
                <img class="block" src="https://static.shuffle.dev/components/preview/2f808e47-944e-42cf-b821-2358251e0600/assets/public/saturn-assets/logos/brands/logo-example3.png" alt="">
              </div>
              <div class="w-1/3 px-4">
                <img class="block" src="https://static.shuffle.dev/components/preview/2f808e47-944e-42cf-b821-2358251e0600/assets/public/saturn-assets/logos/brands/logo-example2.png" alt="">
              </div>
              <div class="w-1/3 px-4">
                <img class="block" src="https://static.shuffle.dev/components/preview/2f808e47-944e-42cf-b821-2358251e0600/assets/public/saturn-assets/logos/brands/logo-example2.png" alt="">
              </div>
            </div>
          </div>
          <div class="relative lg:-mt-20 w-full max-w-md">
            <img class="absolute top-0 left-0 w-full" src="saturn-assets/images/headers/bg-folder.svg" alt="">
            <div class="relative flex flex-col">
              <div class="xs:w-100 max-w-xs pl-5 xs:pl-10 pt-10 pr-20 xs:pr-5 z-10">
                <h3 class="text-xl font-semibold text-gray-900">We are building the future together</h3>
              </div>
              <div class="xs:w-100 max-w-md -mt-10 px-5 xs:px-10 pb-12 pt-18 bg-orange-50 rounded-b-3xl">
                <div class="flex items-center">
                  <div>
                    <span class="text-3xl xs:text-5xl font-semibold text-gray-900">18k+</span>
                    <span class="block text-sm text-gray-500">Projects Done</span>
                  </div>
                  <div class="h-12 w-px mx-auto bg-orange-200"></div>
                  <div>
                    <span class="text-3xl xs:text-5xl font-semibold text-gray-900">20+</span>
                    <span class="block text-sm text-gray-500">Awards Winning</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection