<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section>
  <div class="lg:min-h-[560px] bg-blue-100 px-4 sm:px-10">
    <div class="max-w-7xl w-full mx-auto py-8 md:py-8">
      <div class="grid lg:grid-cols-2 justify-center items-center gap-6">
        <div>
          <h1 class="text-5xl md:text-7xl text-4xl font-bold  mb-6 ">Website Design to Deployment</h1>

          <h1>Client-focused, customer-centric, creating website solutions that deliver tangible business results,
            Appnovation's web developers helps brands the ever-changing digital landscape.</h1>
          <div class="flex gap-y-4 gap-x-8 mt-8">
            {{-- <button id="contactBtn"
              class='bg-black hover:bg-[#222] text-white flex items-center transition-all font-semibold rounded-md px-3 py-3 text-sm md:text-lg md:px-5 md:py-3'>Let’s
              GET IN TOUCH
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
                <path
                  d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                  data-original="#000000" />
              </svg>
            </button> --}}
            <button href="/contact" id="contactBtn"
              class="flex items-center group relative px-8 py-4 bg-[#00e9c2] text-black font-semibold rounded-none hover:bg-white transition-all duration-300">
              Start Your Project
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
                <path
                  d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                  data-original="#000000" />
              </svg>
              <div
                class="absolute inset-0 border border-[#00e9c2] transform translate-x-1 translate-y-1 group-hover:translate-x-2 group-hover:translate-y-2 transition-transform duration-300">
              </div>
            </button>
            {{-- <button
              class='bg-transparent border-2 border-[#333] flex items-center transition-all font-semibold rounded-md px-3 py-2 md:px-5 md:py-3'>
              CHECK PACKAGES
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
                <path
                  d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                  data-original="#000000" />
              </svg>
            </button> --}}
          </div>
        </div>
        <div class="max-lg:order-first hidden md:block lg:h-full">
          <div class="relative h-[130px] lg:h-[480px] w-full">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735627971download.jpg" alt="banner img"
              class="w-full h-full object-contain lg:object-cover rounded" />
            <!-- Optional: Add an overlay effect -->
            <div class="absolute inset-0 bg-gradient-to-t from-blue-100/20 to-transparent rounded-lg"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Main Wrapper -->
<section class="bg-black py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Header Section -->
    <div class="relative mb-20">
      <div class="text-left">
        <h2 class="text-5xl md:text-7xl font-bold text-white mb-8">
          <span class="text-[#00e9c2]">Web</span> Development<br />
          Solutions.
        </h2>
        <div class="w-24 h-1 bg-[#00e9c2]"></div>
      </div>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Service Card -->
      <div class="group">
        <div
          class="bg-zinc-900 border border-zinc-800 p-8 rounded-lg hover:bg-zinc-800 transition-all duration-300 relative overflow-hidden">
          <!-- Service Number -->
          <div
            class="absolute -top-4 -left-4 text-8xl font-bold text-zinc-700 group-hover:text-zinc-600 transition-colors duration-300">
            01
          </div>

          <!-- Content -->
          <div class="relative z-10">
            <!-- Icon -->
            <div class="text-[#00e9c2] mb-6">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>

            <!-- Title -->
            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#00e9c2] transition-colors duration-300">
              eCommerce Development
            </h3>

            <!-- Arrow -->
            <div class="flex items-center text-zinc-500 group-hover:text-[#00e9c2] transition-colors duration-300">
              <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>

      </div>
      <div class="group">
        <div
          class="bg-zinc-900 border border-zinc-800 p-8 rounded-lg hover:bg-zinc-800 transition-all duration-300 relative overflow-hidden">
          <!-- Service Number -->
          <div
            class="absolute -top-4 -left-4 text-8xl font-bold text-zinc-700 group-hover:text-zinc-600 transition-colors duration-300">
            02
          </div>

          <!-- Content -->
          <div class="relative z-10">
            <!-- Icon -->
            <div class="text-[#00e9c2] mb-6">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>

            <!-- Title -->
            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#00e9c2] transition-colors duration-300">
              Web Application Development
            </h3>

            <!-- Arrow -->
            <div class="flex items-center text-zinc-500 group-hover:text-[#00e9c2] transition-colors duration-300">
              <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>

      </div>
      <div class="group">
        <div
          class="bg-zinc-900 border border-zinc-800 p-8 rounded-lg hover:bg-zinc-800 transition-all duration-300 relative overflow-hidden">
          <!-- Service Number -->
          <div
            class="absolute -top-4 -left-4 text-8xl font-bold text-zinc-700 group-hover:text-zinc-600 transition-colors duration-300">
            03
          </div>

          <!-- Content -->
          <div class="relative z-10">
            <!-- Icon -->
            <div class="text-[#00e9c2] mb-6">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>

            <!-- Title -->
            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#00e9c2] transition-colors duration-300">
              Custom Web Development
            </h3>

            <!-- Arrow -->
            <div class="flex items-center text-zinc-500 group-hover:text-[#00e9c2] transition-colors duration-300">
              <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>

      </div>
      <div class="group">
        <div
          class="bg-zinc-900 border border-zinc-800 p-8 rounded-lg hover:bg-zinc-800 transition-all duration-300 relative overflow-hidden">
          <!-- Service Number -->
          <div
            class="absolute -top-4 -left-4 text-8xl font-bold text-zinc-700 group-hover:text-zinc-600 transition-colors duration-300">
            04
          </div>

          <!-- Content -->
          <div class="relative z-10">
            <!-- Icon -->
            <div class="text-[#00e9c2] mb-6">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>

            <!-- Title -->
            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#00e9c2] transition-colors duration-300">
              CRM Development
            </h3>

            <!-- Arrow -->
            <div class="flex items-center text-zinc-500 group-hover:text-[#00e9c2] transition-colors duration-300">
              <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>

      </div>
      <div class="group">
        <div
          class="bg-zinc-900 border border-zinc-800 p-8 rounded-lg hover:bg-zinc-800 transition-all duration-300 relative overflow-hidden">
          <!-- Service Number -->
          <div
            class="absolute -top-4 -left-4 text-8xl font-bold text-zinc-700 group-hover:text-zinc-600 transition-colors duration-300">
            05
          </div>

          <!-- Content -->
          <div class="relative z-10">
            <!-- Icon -->
            <div class="text-[#00e9c2] mb-6">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>

            <!-- Title -->
            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#00e9c2] transition-colors duration-300">
              Hr Portal Development
            </h3>

            <!-- Arrow -->
            <div class="flex items-center text-zinc-500 group-hover:text-[#00e9c2] transition-colors duration-300">
              <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>

      </div>
      <div class="group">
        <div
          class="bg-zinc-900 border border-zinc-800 p-8 rounded-lg hover:bg-zinc-800 transition-all duration-300 relative overflow-hidden">
          <!-- Service Number -->
          <div
            class="absolute -top-4 -left-4 text-8xl font-bold text-zinc-700 group-hover:text-zinc-600 transition-colors duration-300">
            06
          </div>

          <!-- Content -->
          <div class="relative z-10">
            <!-- Icon -->
            <div class="text-[#00e9c2] mb-6">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>

            <!-- Title -->
            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#00e9c2] transition-colors duration-300">
              LMS Development
            </h3>

            <!-- Arrow -->
            <div class="flex items-center text-zinc-500 group-hover:text-[#00e9c2] transition-colors duration-300">
              <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>

      </div>
      <div class="group">
        <div
          class="bg-zinc-900 border border-zinc-800 p-8 rounded-lg hover:bg-zinc-800 transition-all duration-300 relative overflow-hidden">
          <!-- Service Number -->
          <div
            class="absolute -top-4 -left-4 text-8xl font-bold text-zinc-700 group-hover:text-zinc-600 transition-colors duration-300">
            07
          </div>

          <!-- Content -->
          <div class="relative z-10">
            <!-- Icon -->
            <div class="text-[#00e9c2] mb-6">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>

            <!-- Title -->
            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#00e9c2] transition-colors duration-300">
              CMS Development
            </h3>

            <!-- Arrow -->
            <div class="flex items-center text-zinc-500 group-hover:text-[#00e9c2] transition-colors duration-300">
              <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>

      </div>

      <div class="group">
        <div
          class="bg-zinc-900 border border-zinc-800 p-8 rounded-lg hover:bg-zinc-800 transition-all duration-300 relative overflow-hidden">
          <!-- Service Number -->
          <div
            class="absolute -top-4 -left-4 text-8xl font-bold text-zinc-700 group-hover:text-zinc-600 transition-colors duration-300">
            08
          </div>

          <!-- Content -->
          <div class="relative z-10">
            <!-- Icon -->
            <div class="text-[#00e9c2] mb-6">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>

            <!-- Title -->
            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#00e9c2] transition-colors duration-300">
              Support and Maintenance
            </h3>

            <!-- Arrow -->
            <div class="flex items-center text-zinc-500 group-hover:text-[#00e9c2] transition-colors duration-300">
              <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>

      </div>

      <!-- Repeat for other services -->
    </div>

    <!-- Bottom Section -->
    <div class="mt-20 flex flex-col md:flex-row items-center justify-between">
      <p class="text-zinc-400 text-lg mb-8 md:mb-0 md:w-1/2">
        Ready to transform your digital presence? Let's create something extraordinary together.
      </p>
      <a href="/contact"
        class="group relative px-8 py-4 bg-[#00e9c2] text-black font-semibold rounded-none hover:bg-white transition-all duration-300">
        Start Your Project
        <div
          class="absolute inset-0 border border-[#00e9c2] transform translate-x-1 translate-y-1 group-hover:translate-x-2 group-hover:translate-y-2 transition-transform duration-300">
        </div>
      </a>
    </div>
  </div>
</section>


<section class="w-full">
  <!-- Reviews Section -->
  <div class="bg-[#556c25] py-5">
    <div class="max-w-7xl mx-auto px-4">
      <!-- Review Logos Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Google Reviews -->
        <div class="flex flex-col items-center">
          <img
            src="https://cdn-icggj.nitrocdn.com/AphBmykuaGyxZijWArNhxcCiPzVdYZGT/assets/images/optimized/rev-d7c956b/thriveagency.com/wp-content/themes/thrive-agency/images/google-reviews-stats-new.svg"
            alt="Google Reviews" class="h-11 mb-4">
          <div class="flex items-center mb-2">
            <img
              src="https://cdn-icggj.nitrocdn.com/AphBmykuaGyxZijWArNhxcCiPzVdYZGT/assets/images/source/rev-d7c956b/thriveagency.com/files/social-review-item-new.svg"
              alt="5 Stars" class="h-6">
          </div>
          <p class="font-bold text-white">150+ Reviews</p>
        </div>

        <!-- Clutch Reviews -->
        <div class="flex flex-col items-center">
          <img
            src="https://cdn-icggj.nitrocdn.com/AphBmykuaGyxZijWArNhxcCiPzVdYZGT/assets/images/optimized/rev-d7c956b/thriveagency.com/wp-content/themes/thrive-agency/images/clutch-reviews-stats-new.svg"
            alt="Clutch Reviews" class="h-11 mb-4">
          <div class="flex items-center mb-2">
            <img
              src="https://cdn-icggj.nitrocdn.com/AphBmykuaGyxZijWArNhxcCiPzVdYZGT/assets/images/source/rev-d7c956b/thriveagency.com/files/social-review-item-new.svg"
              alt="5 Stars" class="h-6">
          </div>
          <p class="font-bold text-white">50+ Reviews</p>
        </div>

        <!-- UpCity Reviews -->
        <div class="flex flex-col items-center">
          <img
            src="https://cdn-icggj.nitrocdn.com/AphBmykuaGyxZijWArNhxcCiPzVdYZGT/assets/images/optimized/rev-d7c956b/thriveagency.com/wp-content/themes/thrive-agency/images/upcity-reviews-logo-new.svg"
            alt="UpCity Reviews" class="h-11 mb-4">
          <div class="flex items-center mb-2">
            <img
              src="https://cdn-icggj.nitrocdn.com/AphBmykuaGyxZijWArNhxcCiPzVdYZGT/assets/images/source/rev-d7c956b/thriveagency.com/files/social-review-item-new.svg"
              alt="5 Stars" class="h-6">
          </div>
          <p class="font-bold text-white">50+ Reviews</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-black">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:py-16 py-6 relative z-10">
    <div class="relative mb-10 mt-6 lg:mt-0">
      <div class="text-left">
        <h2 class="text-5xl md:text-7xl font-bold text-white mb-8">
          <span class="text-[#00e9c2]">Our</span> Tech Stack
        </h2>
        <div class="w-24 h-1 bg-[#00e9c2]"></div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Frontend Section -->
      <div class=" p-6 rounded-2xl border border-zinc-800 hover:border-blue-500 
                        transition-all duration-500 transform bg-zinc-900 ">
        <!-- Glowing effect on hover -->


        <div class="mb-8 flex items-center">
          <div class="w-2 h-8 bg-gradient-to-b from-blue-500 to-purple-600 rounded-full mr-4 group-hover:animate-pulse">
          </div>
          <h2 class="text-3xl font-bold text-white group-hover:text-transparent group-hover:bg-clip-text 
                               group-hover:bg-gradient-to-r from-blue-400 to-purple-400 transition-all duration-300">
            Frontend</h2>
        </div>

        <!-- Tech Grid -->


        <div class="grid grid-cols-3 gap-6">
          <!-- Tech Card with enhanced hover effects -->
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
                                hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/AngularJS-icon.webp"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
                                   transition-colors text-center">AngularJS</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
                                    rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
                    hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/react-colored-logo.svg"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
                       transition-colors text-center">ReactJS</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
                        rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
        hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735643348Screenshot_(58).png"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
           transition-colors text-center">NextJs</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
            rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/html.webp" class="w-12 h-12 rounded mx-auto"
                alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
   transition-colors text-center">HTML5</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
    rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/CSS3-1536x1536.png"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
   transition-colors text-center">CSS3</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
    rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/jslogo.png" class="w-12 h-12 rounded mx-auto"
                alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
   transition-colors text-center">Javascript</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
    rounded-xl transition-all duration-500"></div>
          </div>
        </div>

      </div>
      <div class=" p-6 rounded-2xl border border-zinc-800 hover:border-blue-500 
            transition-all duration-500 transform bg-zinc-900 ">
        <!-- Glowing effect on hover -->


        <div class="mb-8 flex items-center">
          <div class="w-2 h-8 bg-gradient-to-b from-blue-500 to-purple-600 rounded-full mr-4 group-hover:animate-pulse">
          </div>
          <h2 class="text-3xl font-bold text-white group-hover:text-transparent group-hover:bg-clip-text 
                   group-hover:bg-gradient-to-r from-blue-400 to-purple-400 transition-all duration-300">Backend</h2>
        </div>

        <!-- Tech Grid -->
        <div class="grid grid-cols-3 gap-6">
          <!-- Tech Card with enhanced hover effects -->
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
        hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735643472Screenshot_(59).png"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
           transition-colors text-center">Node.js</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
            rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
        hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/download.png"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
           transition-colors text-center">Laravel</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
            rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
        hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/PHP-logo.webp"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
           transition-colors text-center">Php</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
            rounded-xl transition-all duration-500"></div>
          </div>

          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
        hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/images.png" class="w-12 h-12 rounded mx-auto"
                alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
           transition-colors text-center">.NET</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
            rounded-xl transition-all duration-500"></div>
          </div>
        </div>
      </div>
      <div class=" p-6 rounded-2xl border border-zinc-800 hover:border-blue-500 
transition-all duration-500 transform  bg-zinc-900">
        <!-- Glowing effect on hover -->


        <div class="mb-8 flex items-center">
          <div class="w-2 h-8 bg-gradient-to-b from-blue-500 to-purple-600 rounded-full mr-4 group-hover:animate-pulse">
          </div>
          <h2 class="text-3xl font-bold text-white group-hover:text-transparent group-hover:bg-clip-text 
       group-hover:bg-gradient-to-r from-blue-400 to-purple-400 transition-all duration-300">Database & Servers</h2>
        </div>

        <!-- Tech Grid -->
        <div class="grid grid-cols-3 gap-6">

          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
  hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/mongodb-colored.svg"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
     transition-colors text-center">MongoDB</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
      rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/Postgresql.png.webp"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
   transition-colors text-center">Postgresql</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
    rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2023/11/mysql.webp" class="w-12 h-12 rounded mx-auto"
                alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
   transition-colors text-center">MySQL</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
    rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735643676Screenshot_(60).png"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
   transition-colors text-center">SQL Server</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
    rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2024/03/Linux-Server.jpg.webp"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
   transition-colors text-center">Linux</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
    rounded-xl transition-all duration-500"></div>
          </div>
          <div class="tech-card group/item relative overflow-hidden rounded-xl  p-4 
hover:bg-gray-900/50 transition-all duration-500">
            <div class="transform transition-transform duration-500 group-hover/item:scale-110">
              <img src="https://gomilestone.com/wp-content/uploads/2024/03/windows-hosting.png.webp"
                class="w-12 h-12 rounded mx-auto" alt="AngularJS">
            </div>
            <h3 class="text-gray-200 mt-4 text-sm font-medium group-hover/item:text-blue-400 
   transition-colors text-center">Window</h3>
            <div class="absolute inset-0 border border-blue-500/0 group-hover/item:border-blue-500/50 
    rounded-xl transition-all duration-500"></div>
          </div>
        </div>
      </div>


    </div>
  </div>

</section>
<section class="bg-black">
  <main class="sap-fico max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:py-16 py-6">
    <div class="relative mb-10 mt-6 lg:mt-0">
      <div class="text-left">
        <h2 class="text-5xl md:text-7xl font-bold text-white mb-8">
          <span class="text-[#00e9c2]">Our</span> Clients
        </h2>
        <div class="w-24 h-1 bg-[#00e9c2]"></div>
      </div>
    </div>
    <section class="review" id="review">
        <div class="container">
            <div class="review-container">
              
                <div class="review-list owl-carousel">
                    <div class="review-item" data-target="0">
                        <span><img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/harry.png"
                                alt="harry"></span>
                        <div class="info">
                            <h3>Harry Thomas</h3>
                            <p>SAP FICO Manager</p>
                        </div>
                    </div>
                    <div class="review-item" data-target="1">
                        <span><img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/oscar.png"
                                alt="oscar"></span>
                        <div class="info">
                            <h3>Oscar Finley</h3>
                            <p>SAP FICO Analyst</p>
                        </div>
                    </div>
                    <div class="review-item" data-target="2">
                        <span> <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/amelia.png"
                                alt="amelia"></span>
                        <div class="info">
                            <h3>Amelia Louis</h3>
                            <p>Programme Manager</p>
                        </div>
                    </div>
                    <div class="review-item" data-target="3">
                        <span><img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/florence.png"
                                alt="florence"></span>
                        <div class="info">
                            <h3>Florence Blake</h3>
                            <p>SAP FICO Lead</p>
                        </div>
                    </div>
                    <div class="review-item" data-target="4">
                        <span><img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/archie.png"
                                alt="archie"></span>
                        <div class="info">
                            <h3>Archie Ralph</h3>
                            <p>SAP FICO Consultant </p>
                        </div>
                    </div>
                    <div class="review-item" data-target="5">
                        <span><img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/ava.png"
                                alt="ava"></span>
                        <div class="info">
                            <h3>Ava Charles</h3>
                            <p>SAP FICO Architect</p>
                        </div>
                    </div>
                </div>
                <div class="content-list">
                    <div class="content-item" id="0">
                        <span>
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/harry.png"
                                alt="harry">
                        </span>
                        <div class="content">
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/yellow-stars.png"
                                alt="yellow-stars">
                            <p>SAP FICO course instructor was very knowledgeable and ensured everyone understood
                                each topic, and I was amazed by the learning experience. I was highly thankful to
                                Smith for helping me with the precise study material. He explained and showed me the
                                best way to understand the essential concepts quickly. Everything about the course
                                was perfect. Thank you, The Knowledge Academy.</p>
                        </div>
                    </div>
                    <div class="content-item" id="1">
                        <span>
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/oscar.png"
                                alt="oscar">
                        </span>
                        <div class="content">
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/yellow-stars.png"
                                alt="yellow-stars">
                            <p>I completed sap fico training from The Knowledge Academy. The training material was
                                well-structured and well-explained with relevant examples. I have thoroughly enjoyed
                                the training. My trainer Robin was excellent, very knowledgeable and professional in
                                his way. I was delighted with my purchase. I also told many friends about the
                                quality of the course material and the excellent customer support.</p>
                        </div>
                    </div>
                    <div class="content-item" id="2">
                        <span>
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/amelia.png"
                                alt="amelia">
                        </span>
                        <div class="content">
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/yellow-stars.png"
                                alt="yellow-stars">
                            <p>I finished this sap fico course at the knowledge academy. This course helped me in a
                                significant way and also helped to increase my knowledge. The course material was
                                well-written, well-organised, and easy to understand. The presentation content
                                provided in this training was fantastic, fabulous, and easy to grab. My trainer
                                Daniel helped me to clear all my doubts and gave meaningful examples to help me
                                understand the course material. Overall my experience was delightful and thanks to
                                my trainer.</p>
                        </div>
                    </div>
                    <div class="content-item" id="3">
                        <span>
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/florence.png"
                                alt="florence">
                        </span>
                        <div class="content">
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/yellow-stars.png"
                                alt="yellow-stars">
                            <p>I recently took a sap fico course with a fantastic, extremely knowledgeable
                                instructor. Noah did an excellent job of ensuring we grasped the material, relating
                                it to actual situations, and allowing us to engage in discussions. He was extremely
                                helpful and I would undoubtedly attend one of his courses again. For the excellent
                                study, the knowledge academy comes highly recommended.</p>
                        </div>
                    </div>
                    <div class="content-item" id="4">
                        <span>
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/archie.png"
                                alt="archie">
                        </span>
                        <div class="content">
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/yellow-stars.png"
                                alt="yellow-stars">
                            <p>My fantastic experience with the trainer was excellent in sap fico training. He
                                methodically translated this teaching with a great degree of indebtedness,
                                displaying high professionalism. I am delighted we were supposed to work together. I
                                will be willing to have further engagements and training with James once the
                                opportunity presents itself. The trainer and the knowledge academy did a fantastic
                                job. I'm grateful.</p>
                        </div>
                    </div>
                    <div class="content-item" id="5">
                        <span>
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/ava.png"
                                alt="ava">
                        </span>
                        <div class="content">
                            <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/yellow-stars.png"
                                alt="yellow-stars">
                            <p>Last week, I attended sap fico course from the knowledge academy. My trainer
                                explained all the essential concepts required to fit my position. He gave me the
                                skills to work with business requirements and resolve support issues. I am grateful
                                for attending this training and thankful for this platform. I recommend this
                                platform to my near ones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</section>

<section id="contact" class="bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:py-14 py-4">
      <div class="relative mb-10 mt-6 lg:mt-0">
        <div class="text-left">
          <h2 class="text-5xl md:text-7xl font-bold text-white mb-8">
            <span class="text-[#00e9c2]">Contact</span> Us
          </h2>
          <div class="w-24 h-1 bg-[#00e9c2]"></div>
        </div>
      </div>
      <div class="pardot-form w-full">
        <div class="">
          <div class="flex flex-wrap -mx-4">
            <!-- Left Column -->
            <div class="w-full lg:w-5/12 md:w-5/12 px-4 mb-8 lg:mb-0">
              <!-- Title Section -->
              <div class="mb-6">
                <div class="text-2xl text-white md:text-6xl">
                  Get in touch and get started today. We're ready!
                </div>
              </div>

              <!-- Description Section -->
              <div class="text-gray-700">
                <div class="prose max-w-none text-white">
                  <p class="mb-4">
                    As a leading web development firm, we provide experienced consultants, designers and developers to
                    take your online presence to the next level. In addition to creating robust, scalable and secure
                    enterprise web-based experiences, Appnovation can also help organizations with migrations, upgrades
                    and integration. Lastly, we offer a full service Managed Services offering that includes 24x7
                    support and maintenance that is able to handle even the most extreme and complex cases swiftly and
                    easily.
                  </p>

                  <p class="mb-4">
                    Complete the form, email us at
                    <a href="mailto:contact@techminimaa.com" class="text-blue-600 hover:text-blue-800">
                      contact@techminimaa.com
                    </a>
                    or contact us directly by phone at one of our
                    <a href="https://www.appnovation.com/contact-us" class="text-blue-600 hover:text-blue-800">
                      global office locations
                    </a>
                    to talk about your next or an upcoming project. Need more convincing? Just take a look at our client
                    list to see just some of the brand names that Appnovation has helped and now call customers.
                  </p>
                </div>
              </div>
            </div>

            <!-- Right Column - Form -->
            <div class="w-full lg:w-7/12 md:w-7/12 px-4">
              <form id="pardot-form" class="flex flex-wrap justify-between gap-6">
                <!-- First Name -->
                <div class="w-full md:w-[48%]">
                  <input type="text" placeholder="Name**"
                    class="w-full px-5 py-6 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700"
                    required>
                </div>

                <!-- Last Name -->

                <!-- Job Title -->
                <div class="w-full md:w-[48%]">
                  <input type="text" placeholder="Job Title"
                    class="w-full px-5 py-6 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700">
                </div>

                <!-- Company -->
                <div class="w-full md:w-[48%]">
                  <input type="text" placeholder="Company"
                    class="w-full px-5 py-6 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700">
                </div>

                <!-- Email -->
                <div class="w-full md:w-[48%] relative">
                  <input type="email" placeholder="Work Email**"
                    class="w-full px-5 py-6 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700"
                    required>
                  <div
                    class="email-tip hidden absolute mt-2 p-3 bg-white border border-gray-200 rounded-md shadow-lg w-[90%] mx-[5%] text-center text-sm">
                    Please use your work email address, so we can get back to you quickly.
                  </div>
                </div>

                <!-- Phone -->
                <div class="w-full md:w-[48%]">
                  <input type="tel" placeholder="Phone"
                    class="w-full px-5 py-6 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700">
                </div>

                <!-- Country -->
                <div class="w-full md:w-[48%]">
                  <select
                    class="w-full px-5 py-6 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700 appearance-none bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPjxwb2x5bGluZSBwb2ludHM9IjYgOSAxMiAxNSAxOCA5Ij48L3BvbHlsaW5lPjwvc3ZnPg==')] bg-no-repeat bg-[center_right_1rem]"
                    required>
                    <option value="">Country**</option>
                    <!-- Add country options -->
                  </select>
                </div>



                <!-- Project Details -->
                <div class="w-full">
                  <textarea placeholder="Project Details/Inquiry**" rows="8"
                    class="w-full px-5 py-6 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700 resize-vertical"
                    required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="w-full flex flex-col md:flex-row items-center justify-center gap-6 ">


                  <!-- Email Section -->
                  <div class="flex items-center gap-2">
                    <!-- Alternate Email Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span class="text-gray-700 text-md text-white">Or email us at</span>
                    <a href="mailto:contact@techminimaa.com"
                      class="text-[#00e9c2] hover:text-[#baf7e7] text-sm underline transition-colors duration-200">
                      contact@techminimaa.com
                    </a>
                  </div>
                  <button href="/contact" id="contactBtn"
                    class="flex items-center group relative px-8 py-4 bg-[#00e9c2] text-black font-semibold rounded-none hover:bg-white transition-all duration-300">
                    Submit Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                      viewBox="0 0 492.004 492.004">
                      <path
                        d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                        data-original="#000000" />
                    </svg>
                    <div
                      class="absolute inset-0 border border-[#00e9c2] transform translate-x-1 translate-y-1 group-hover:translate-x-2 group-hover:translate-y-2 transition-transform duration-300">
                    </div>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="bg-black">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:py-14 py-4">
    <div class="relative mb-10 mt-6 lg:mt-0">
      <div class="text-left">
        <h2 class="text-5xl md:text-7xl font-bold text-white mb-8">
          <span class="text-[#00e9c2]">Web </span>Development FAQs
        </h2>
        <div class="w-24 h-1 bg-[#00e9c2]"></div>
      </div>
    </div>
    <div class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
      <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
          <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What is web development?</h3>
          <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" 
               alt="down-arrow" 
               class="w-6 h-6">
      </div>
      <div class="ans hidden p-4 md:p-5">
          <p class="text-sm">Web development is the process of building, programming, and maintaining websites and web applications. Web developers use various coding and programming languages, like HTML, to build sites and applications.</p>
      </div>
  </div>
  <div class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
    <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
        <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What are web development services?</h3>
        <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" 
             alt="down-arrow" 
             class="w-6 h-6">
    </div>
    <div class="ans hidden p-4 md:p-5">
        <p class="text-sm">Web development services are services provided by an agency, company, or freelancer that help you build your website, implement various website functions and applications, and maintain your site.</p>
    </div>
</div>

<div class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
  <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
      <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What’s the difference between web development and web design? </h3>
      <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" 
           alt="down-arrow" 
           class="w-6 h-6">
  </div>
  <div class="ans hidden p-4 md:p-5">
      <p class="text-sm">Web design refers to the aesthetic appearance of your website, like the colors and placement of your buttons, the look of your header and footer banners, and more. Web development refers to the functionality of your website, like ensuring your buttons route users to the correct place. Web designers essentially create the look of your site, and web developers use coding and programming languages to make that look come to life and function correctly as a website.</p>
  </div>
</div>

<div class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
  <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
      <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What is the average cost of web development services?</h3>
      <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" 
           alt="down-arrow" 
           class="w-6 h-6">
  </div>
  <div class="ans hidden p-4 md:p-5">
      <p class="text-sm">The average cost of web development services can range anywhere from $1,000 – $145,000 per website. How much you’ll pay depends on several factors, like the scope of your project, the size of your website, your chosen web development agency, and more!</p>
  </div>
</div>

<div class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
  <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
      <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What are the different types of web development services?</h3>
      <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" 
           alt="down-arrow" 
           class="w-6 h-6">
  </div>
  <div class="ans hidden p-4 md:p-5">
    <div class="_panel-body ">
      <div class="_text">
        <p class="text-lg">The different types of web development services include:</p>
<ul class="list-disc ml-6">
<li>Responsive design</li>
<li>Ecommerce functionality</li>
<li>Website call tracking</li>
<li>CMS development and integration</li>
<li>Website security</li>
<li>Website maintenance</li>
<li>Design functionality</li>
<li>Marketing automation</li>
<li>Company targeting</li>
<li>Mobile app development</li>
</ul>
      </div>
    </div>
  </div>
</div>


  </div>
</section>
<section class="newslettersection bg-black text-white py-20">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <div class="flex items-center">
        <img src="assets/images/mail-ico.svg" alt="email icon" class="h-12 w-12 mr-4">
        <article>
          <h3 class="text-2xl font-bold mb-2">Stay updated</h3>
          <p>Unplug, Untie and Unwind...it's that simple.</p>
        </article>
      </div>
      <div class="pt-3 md:pt-0">
        <form id="subscribeCall" class="flex flex-col md:flex-row">
          <div class="md:w-2/3">
            <div class="relative">
              <input 
                required="" 
                type="email" 
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                name="email" 
                class="form-control bg-transparent border border-white rounded-md py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" 
                id="floatingInput" 
                placeholder=" "
              >
              <label 
                for="floatingInput" 
                class="absolute left-4 -top-3 text-gray-400 text-sm transition-all transform bg-black px-2 py-1 rounded-md pointer-events-none"
              >
                Email address
              </label>
            </div>
          </div>
          <div class="md:w-1/3 mt-4 md:mt-0 ml-0 md:ml-4 flex flex-col items-center md:items-start">
            <input 
              type="submit" 
              name="submit" 
              class="custom_button nwsltrsubmit bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md cursor-pointer" 
              value="Subscribe now"
            >
            <div class="loading mt-2"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection