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

<section class="bg-black text-white">

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="relative mb-6">
      <div class="text-left">
        <h2 class="text-5xl md:text-7xl font-bold text-white mb-8">
          <span class="text-[#00e9c2]">Our</span> Stats
        </h2>
        <div class="w-24 h-1 bg-[#00e9c2]"></div>
      </div>
    </div>
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-x-6 gap-y-12 lg:max-w-7xl sm:max-w-2xl mx-auto">
      <div class="text-center bg-zinc-900 px-4 py-6  border-b-4 border-[#00e9c2] rounded-md  hover:bg-zinc-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#00e9c2] w-10 inline-block" viewBox="0 0 512 512"
          aria-hidden="true" role="img">
          <path
            d="M426.666667 0H85.333333C38.186667 0 0 38.186667 0 85.333333v341.333334C0 473.813333 38.186667 512 85.333333 512h341.333334C473.813333 512 512 473.813333 512 426.666667V85.333333C512 38.186667 473.813333 0 426.666667 0zM469.333333 426.666667c0 23.466667-19.2 42.666667-42.666666 42.666666H85.333333c-23.466667 0-42.666667-19.2-42.666666-42.666666V85.333333c0-23.466667 19.2-42.666667 42.666666-42.666666h341.333334c23.466667 0 42.666667 19.2 42.666666 42.666666v341.333334z" />

          <path
            d="M226.133333 268.8l-29.866666-29.866667c-4.266667-4.266667-4.266667-10.666667 0-14.933333 4.266667-4.266667 10.666667-4.266667 14.933333 0l22.4 22.4 48-48c4.266667-4.266667 10.666667-4.266667 14.933333 0 4.266667 4.266667 4.266667 10.666667 0 14.933333l-55.466666 55.466667c-4.266667 4.266667-10.666667 4.266667-14.933334 0z" />
        </svg>
        <h3 class="text-white text-4xl font-bold mt-4 counter projects">0+</h3>
        <p class="text-gray-400 font-semibold mt-2">Projects Completed</p>
      </div>
      <div class="text-center bg-zinc-900 px-4 py-6  border-b-4 border-[#00e9c2] rounded-md  hover:bg-zinc-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#00e9c2] w-10 inline-block" viewBox="0 0 512 512"
          aria-hidden="true" role="img">
          <!-- Base Circle -->
          <path
            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0zm0 448c-106.039 0-192-85.961-192-192S149.961 64 256 64s192 85.961 192 192-85.961 192-192 192z" />

          <!-- Progress Segments -->
          <path
            d="M256 92.8c89.6 0 163.2 72.8 163.2 163.2 0 89.6-72.8 163.2-163.2 163.2-89.6 0-163.2-72.8-163.2-163.2 0-89.6 72.8-163.2 163.2-163.2zm0 284.8c67.2 0 121.6-54.4 121.6-121.6 0-67.2-54.4-121.6-121.6-121.6v121.6l-86.4-86.4c-38.4 38.4-38.4 99.2 0 137.6 38.4 38.4 99.2 38.4 137.6 0" />

          <!-- Active Indicator Dots -->
          <circle cx="256" cy="128" r="24" />
          <circle cx="384" cy="256" r="24" />
          <circle cx="256" cy="384" r="24" />

          <!-- Progress Arrow -->
          <path d="M256 176v-48c70.4 0 128 57.6 128 128h-48c0-44.183-35.817-80-80-80z">
            <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="0 256 256"
              to="360 256 256" dur="2s" repeatCount="indefinite" />
          </path>
        </svg>
        <h3 class="text-white text-4xl font-bold mt-4 counter ongoing">0+</h3>
        <p class="text-gray-400 font-semibold mt-2">Ongoing Projects</p>
      </div>
      <div class="text-center bg-zinc-900 px-4 py-6  border-b-4 border-[#00e9c2] rounded-md  hover:bg-zinc-800">
        <svg class="fill-[#00e9c2] w-10 inline-block" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 122.699 122.699" xml:space="preserve">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <g>
              <circle cx="19.5" cy="12.2" r="12.1"></circle>
              <path
                d="M6,66.699h1.2v24c0,3.301,2.7,6,6,6h12.6c3.3,0,6-2.699,6-6V89.3c-1.1-2.101-1.8-4.5-1.8-7v-31.4c0-6.1,3.7-11.4,9-13.7 v-2.4c0-3.3-2.7-6-6-6H6c-3.3,0-6,2.7-6,6v25.9C0,64,2.6,66.699,6,66.699z">
              </path>
              <circle cx="103.3" cy="12.2" r="12.1"></circle>
              <path
                d="M83.699,34.7v2.4c5.301,2.3,9,7.6,9,13.7v31.3c0,2.5-0.6,4.9-1.799,7v1.4c0,3.3,2.699,6,6,6h12.6c3.3,0,6-2.7,6-6v-24 h1.199c3.301,0,6-2.7,6-6V34.7c0-3.3-2.699-6-6-6h-27C86.4,28.7,83.699,31.399,83.699,34.7z">
              </path>
              <path
                d="M39.1,50.899L39.1,50.899v9.8v21.6c0,3.3,2.7,6,6,6h2.3v28.3c0,3.3,2.7,6,6,6h16.1c3.3,0,6-2.7,6-6v-28.4h2.3 c3.3,0,6-2.699,6-6V60.7v-9.8l0,0c0-3.3-2.7-6-6-6H45.1C41.7,44.899,39.1,47.6,39.1,50.899z">
              </path>
              <circle cx="61.4" cy="26" r="13.9"></circle>
            </g>
          </g>
        </svg>
        <h3 class="text-white text-4xl font-bold mt-4 counter performance percentage">0%</h3>
        <p class="text-gray-400 font-semibold mt-2">Team Performance</p>
      </div>
      <div class="text-center bg-zinc-900 px-4 py-6  border-b-4 border-[#00e9c2] rounded-md  hover:bg-zinc-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#00e9c2] w-10 inline-block" viewBox="0 0 28 28">
          <path
            d="M18.56 16.94h-3.12l.65-2.16a2.58 2.58 0 0 0-1.66-3.21 1.41 1.41 0 0 0-1.81 1l-.1.42a8.61 8.61 0 0 1-2.26 4l-.57.56a1.56 1.56 0 0 0-1.21-.59h-.73a1.56 1.56 0 0 0-1.56 1.54v6.44a1.56 1.56 0 0 0 1.56 1.56h.73a1.55 1.55 0 0 0 1.33-.76l.14.07a6.55 6.55 0 0 0 2.91.69h3.59a3.58 3.58 0 0 0 3-1.6 6.34 6.34 0 0 0 1.07-3.53v-2.49a1.94 1.94 0 0 0-1.96-1.94zm-9.56 8a.56.56 0 0 1-.56.56h-.69a.56.56 0 0 1-.56-.56V18.5a.56.56 0 0 1 .56-.56h.73a.56.56 0 0 1 .52.56zm10.5-3.57a5.38 5.38 0 0 1-.9 3 2.59 2.59 0 0 1-2.15 1.15h-3.59a5.53 5.53 0 0 1-2.46-.58l-.4-.2V18.6l.92-.92a9.63 9.63 0 0 0 2.53-4.46l.1-.41a.43.43 0 0 1 .2-.26.4.4 0 0 1 .32 0 1.58 1.58 0 0 1 1 2l-.84 2.81a.5.5 0 0 0 .08.44.48.48 0 0 0 .4.2h3.79a.94.94 0 0 1 .94.94zM11 7.3l-.32 1.85a1.09 1.09 0 0 0 .44 1.09 1.11 1.11 0 0 0 .65.22 1.18 1.18 0 0 0 .52-.13L14 9.45l1.67.88a1.1 1.1 0 0 0 1.17-.09 1.09 1.09 0 0 0 .44-1.08L17 7.3 18.31 6a1.1 1.1 0 0 0 .29-1.14 1.12 1.12 0 0 0-.9-.76l-1.87-.27L15 2.12a1.12 1.12 0 0 0-2 0l-.83 1.69-1.87.27a1.12 1.12 0 0 0-.9.76A1.1 1.1 0 0 0 9.69 6zm-.6-2.23 2.13-.31a.49.49 0 0 0 .47-.27l1-1.93a.11.11 0 0 1 .2 0l1 1.93a.49.49 0 0 0 .38.27l2.13.31a.12.12 0 0 1 .09.08.11.11 0 0 1 0 .11l-1.54 1.5a.53.53 0 0 0-.15.45l.37 2.11a.09.09 0 0 1-.05.11.1.1 0 0 1-.12 0l-1.9-1a.47.47 0 0 0-.46 0l-1.91 1a.09.09 0 0 1-.11 0 .09.09 0 0 1-.05-.11l.37-2.11a.53.53 0 0 0-.15-.45l-1.54-1.5a.11.11 0 0 1 0-.11.12.12 0 0 1-.12-.08zm-3.06 8.18a1 1 0 0 0 1-1.19l-.27-1.52 1.12-1.09a1 1 0 0 0-.56-1.73L7.1 7.5l-.69-1.39a1.05 1.05 0 0 0-1.82 0L3.9 7.5l-1.53.22a1 1 0 0 0-.56 1.73l1.11 1.09-.27 1.52a1 1 0 0 0 .41 1 1 1 0 0 0 1.07.07l1.37-.72 1.37.72a1 1 0 0 0 .47.12zm-1.84-1.9a.46.46 0 0 0-.23.06l-1.63.82.36-1.78a.53.53 0 0 0-.2-.45L2.51 8.71l1.8-.26a.47.47 0 0 0 .37-.27l.83-1.63.81 1.63a.47.47 0 0 0 .37.27l1.8.29L7.2 10a.53.53 0 0 0-.15.45l.29 1.8-1.61-.84a.46.46 0 0 0-.23-.06zm20.95-2.94a1 1 0 0 0-.82-.69L24.1 7.5l-.69-1.39a1.05 1.05 0 0 0-1.82 0L20.9 7.5l-1.53.22a1 1 0 0 0-.56 1.73l1.11 1.09-.27 1.52a1 1 0 0 0 .41 1 1 1 0 0 0 1.07.07l1.37-.72 1.37.72a1 1 0 0 0 .47.12 1 1 0 0 0 1-1.19l-.27-1.52 1.11-1.09a1 1 0 0 0 .27-1.04zM24.2 10a.53.53 0 0 0-.15.45l.29 1.8-1.61-.84a.47.47 0 0 0-.46 0l-1.63.82.36-1.78a.53.53 0 0 0-.2-.45l-1.29-1.29 1.8-.26a.47.47 0 0 0 .37-.27l.83-1.63.81 1.63a.47.47 0 0 0 .37.27l1.8.29z"
            data-name="Layer 2" data-original="#000000" />
        </svg>
        <h3 class="text-white text-4xl font-bold mt-4 counter rating">0.0 / 5</h3>
        <p class="text-gray-400 font-semibold mt-2">Client Feedback</p>
      </div>
    </div>
  </div>
</section>
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
              <span><img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/harry.png" alt="harry"></span>
              <div class="info">
                <h3>Harry Thomas</h3>
                <p>SAP FICO Manager</p>
              </div>
            </div>
            <div class="review-item" data-target="1">
              <span><img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/oscar.png" alt="oscar"></span>
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
              <span><img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/ava.png" alt="ava"></span>
              <div class="info">
                <h3>Ava Charles</h3>
                <p>SAP FICO Architect</p>
              </div>
            </div>
          </div>
          <div class="content-list">
            <div class="content-item" id="0">
              <span>
                <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/harry.png" alt="harry">
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
                <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/oscar.png" alt="oscar">
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
                <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/amelia.png" alt="amelia">
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
                <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/florence.png" alt="florence">
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
                <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/archie.png" alt="archie">
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
                <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/ava.png" alt="ava">
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
<div class="bg-[#556c25] px-4 py-16">
  <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-x-6 gap-y-12 lg:max-w-7xl sm:max-w-2xl max-w-sm mx-auto">
    <div class="text-center bg-gray-700 px-4 py-6 border-b-4 border-orange-600 rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-orange-600 w-10 inline-block" viewBox="0 0 512 512">
        <path
          d="M437 268.152h-50.118c-6.821 0-13.425.932-19.71 2.646-12.398-24.372-37.71-41.118-66.877-41.118h-88.59c-29.167 0-54.479 16.746-66.877 41.118a74.798 74.798 0 0 0-19.71-2.646H75c-41.355 0-75 33.645-75 75v80.118c0 24.813 20.187 45 45 45h422c24.813 0 45-20.187 45-45v-80.118c0-41.355-33.645-75-75-75zm-300.295 36.53v133.589H45c-8.271 0-15-6.729-15-15v-80.118c0-24.813 20.187-45 45-45h50.118c4.072 0 8.015.553 11.769 1.572a75.372 75.372 0 0 0-.182 4.957zm208.59 133.589h-178.59v-133.59c0-24.813 20.187-45 45-45h88.59c24.813 0 45 20.187 45 45v133.59zm136.705-15c0 8.271-6.729 15-15 15h-91.705v-133.59a75.32 75.32 0 0 0-.182-4.957 44.899 44.899 0 0 1 11.769-1.572H437c24.813 0 45 20.187 45 45v80.119z"
          data-original="#000000" />
        <path
          d="M100.06 126.504c-36.749 0-66.646 29.897-66.646 66.646-.001 36.749 29.897 66.646 66.646 66.646 36.748 0 66.646-29.897 66.646-66.646s-29.897-66.646-66.646-66.646zm-.001 103.292c-20.207 0-36.646-16.439-36.646-36.646s16.439-36.646 36.646-36.646 36.646 16.439 36.646 36.646-16.439 36.646-36.646 36.646zM256 43.729c-49.096 0-89.038 39.942-89.038 89.038s39.942 89.038 89.038 89.038 89.038-39.942 89.038-89.038c0-49.095-39.942-89.038-89.038-89.038zm0 148.076c-32.554 0-59.038-26.484-59.038-59.038 0-32.553 26.484-59.038 59.038-59.038s59.038 26.484 59.038 59.038c0 32.554-26.484 59.038-59.038 59.038zm155.94-65.301c-36.748 0-66.646 29.897-66.646 66.646.001 36.749 29.898 66.646 66.646 66.646 36.749 0 66.646-29.897 66.646-66.646s-29.897-66.646-66.646-66.646zm0 103.292c-20.206 0-36.646-16.439-36.646-36.646.001-20.207 16.44-36.646 36.646-36.646 20.207 0 36.646 16.439 36.646 36.646s-16.439 36.646-36.646 36.646z"
          data-original="#000000" />
      </svg>
      <h3 class="text-white text-4xl font-bold mt-4 counter projects">0+</h3>
      <p class="text-gray-400 font-semibold mt-2">Projects Completed</p>
    </div>
    <div class="text-center bg-gray-700 px-4 py-6 border-b-4 border-orange-600 rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-orange-600 w-10 inline-block" viewBox="0 0 512 512">
        <path fill-rule="evenodd"
          d="M64.217 333.491h41.421c5.508 0 10 4.492 10 10v97.833c0 5.508-4.492 10-10 10H64.217c-5.508 0-10-4.492-10-10v-97.833c0-5.508 4.492-10 10-10zm155.471-61.737h-41.422c-5.508 0-10 4.492-10 10v159.571c0 5.508 4.492 10 10 10h41.422c5.508 0 10-4.492 10-10V281.754c0-5.508-4.493-10-10-10zm114.049-64.466h-41.421c-5.508 0-10 4.492-10 10v224.036c0 5.508 4.492 10 10 10h41.421c5.508 0 10-4.492 10-10V217.288c-.001-5.507-4.493-10-10-10zm72.625-57.992h41.421c5.508 0 10 4.492 10 10v282.028c0 5.508-4.492 10-10 10h-41.421c-5.508 0-10-4.492-10-10V159.296c0-5.508 4.492-10 10-10zm2.707-106.018a7.98 7.98 0 0 1-.812-15.938l49.121-2.666a7.98 7.98 0 0 1 8.307 9.094l.006.001-7.088 48.68a7.986 7.986 0 0 1-15.812-2.25l3.878-26.632C385.642 108.019 321.72 152.702 257.158 189.5c-69.131 39.402-138.98 69.744-206.779 93.355a7.976 7.976 0 0 1-5.25-15.062c66.943-23.313 135.906-53.269 204.154-92.167 63.527-36.208 126.449-80.188 186.56-133.799zM45.262 481.873h421.477c5.508 0 10 4.492 10 10v3.193c0 5.508-4.492 10-10 10H45.262c-5.508 0-10-4.492-10-10v-3.193c0-5.508 4.492-10 10-10zM139.587 6.935c-48.325 0-87.5 39.175-87.5 87.5s39.175 87.5 87.5 87.5 87.5-39.175 87.5-87.5c-.001-48.325-39.176-87.5-87.5-87.5zm-8 32.13v5.279c-5.474 1.183-10.606 3.537-14.768 6.92-6.626 5.387-10.827 13.21-10.353 22.965.476 9.817 5.372 16.4 12.186 20.849 5.887 3.844 13.093 5.827 19.733 6.917 5.206.855 10.757 2.201 14.95 4.733 3.261 1.969 5.71 4.838 6.23 9.127.072.595.111 1.013.117 1.26.08 3.359-1.536 5.926-3.962 7.767-3.135 2.379-7.564 3.785-12.005 4.324a33.57 33.57 0 0 1-3.172.254c-5.25.126-10.424-1.156-14.458-3.842-3.274-2.18-5.775-5.367-6.818-9.552a7.982 7.982 0 0 0-15.5 3.812c2.094 8.399 7.044 14.749 13.505 19.052 4.252 2.831 9.164 4.736 14.315 5.711v5.165a8 8 0 1 0 16-.001v-5.01c6.309-1.038 12.699-3.388 17.758-7.226 6.302-4.782 10.494-11.632 10.275-20.829a29.17 29.17 0 0 0-.179-2.76c-1.22-10.052-6.653-16.591-13.856-20.94-6.27-3.786-13.768-5.668-20.637-6.796-4.832-.793-9.912-2.13-13.607-4.543-2.767-1.806-4.752-4.416-4.937-8.224-.202-4.157 1.615-7.512 4.478-9.84 2.281-1.854 5.196-3.144 8.362-3.781a22.978 22.978 0 0 1 10.115.244c5.278 1.338 10.083 4.817 12.614 10.845a7.997 7.997 0 0 0 10.469 4.281 7.997 7.997 0 0 0 4.281-10.469c-4.701-11.196-13.65-17.664-23.489-20.158a37.3 37.3 0 0 0-1.646-.377v-5.161a8 8 0 1 0-16.001.004z"
          clip-rule="evenodd" data-original="#000000" />
      </svg>
      <h3 class="text-white text-4xl font-bold mt-4 counter ongoing">0+</h3>
      <p class="text-gray-400 font-semibold mt-2">Ongoing Projects</p>
    </div>
    <div class="text-center bg-gray-700 px-4 py-6 border-b-4 border-orange-600 rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-orange-600 w-10 inline-block" viewBox="0 0 28 28">
        <path
          d="M18.56 16.94h-3.12l.65-2.16a2.58 2.58 0 0 0-1.66-3.21 1.41 1.41 0 0 0-1.81 1l-.1.42a8.61 8.61 0 0 1-2.26 4l-.57.56a1.56 1.56 0 0 0-1.21-.59h-.73a1.56 1.56 0 0 0-1.56 1.54v6.44a1.56 1.56 0 0 0 1.56 1.56h.73a1.55 1.55 0 0 0 1.33-.76l.14.07a6.55 6.55 0 0 0 2.91.69h3.59a3.58 3.58 0 0 0 3-1.6 6.34 6.34 0 0 0 1.07-3.53v-2.49a1.94 1.94 0 0 0-1.96-1.94zm-9.56 8a.56.56 0 0 1-.56.56h-.69a.56.56 0 0 1-.56-.56V18.5a.56.56 0 0 1 .56-.56h.73a.56.56 0 0 1 .52.56zm10.5-3.57a5.38 5.38 0 0 1-.9 3 2.59 2.59 0 0 1-2.15 1.15h-3.59a5.53 5.53 0 0 1-2.46-.58l-.4-.2V18.6l.92-.92a9.63 9.63 0 0 0 2.53-4.46l.1-.41a.43.43 0 0 1 .2-.26.4.4 0 0 1 .32 0 1.58 1.58 0 0 1 1 2l-.84 2.81a.5.5 0 0 0 .08.44.48.48 0 0 0 .4.2h3.79a.94.94 0 0 1 .94.94zM11 7.3l-.32 1.85a1.09 1.09 0 0 0 .44 1.09 1.11 1.11 0 0 0 .65.22 1.18 1.18 0 0 0 .52-.13L14 9.45l1.67.88a1.1 1.1 0 0 0 1.17-.09 1.09 1.09 0 0 0 .44-1.08L17 7.3 18.31 6a1.1 1.1 0 0 0 .29-1.14 1.12 1.12 0 0 0-.9-.76l-1.87-.27L15 2.12a1.12 1.12 0 0 0-2 0l-.83 1.69-1.87.27a1.12 1.12 0 0 0-.9.76A1.1 1.1 0 0 0 9.69 6zm-.6-2.23 2.13-.31a.49.49 0 0 0 .47-.27l1-1.93a.11.11 0 0 1 .2 0l1 1.93a.49.49 0 0 0 .38.27l2.13.31a.12.12 0 0 1 .09.08.11.11 0 0 1 0 .11l-1.54 1.5a.53.53 0 0 0-.15.45l.37 2.11a.09.09 0 0 1-.05.11.1.1 0 0 1-.12 0l-1.9-1a.47.47 0 0 0-.46 0l-1.91 1a.09.09 0 0 1-.11 0 .09.09 0 0 1-.05-.11l.37-2.11a.53.53 0 0 0-.15-.45l-1.54-1.5a.11.11 0 0 1 0-.11.12.12 0 0 1-.12-.08zm-3.06 8.18a1 1 0 0 0 1-1.19l-.27-1.52 1.12-1.09a1 1 0 0 0-.56-1.73L7.1 7.5l-.69-1.39a1.05 1.05 0 0 0-1.82 0L3.9 7.5l-1.53.22a1 1 0 0 0-.56 1.73l1.11 1.09-.27 1.52a1 1 0 0 0 .41 1 1 1 0 0 0 1.07.07l1.37-.72 1.37.72a1 1 0 0 0 .47.12zm-1.84-1.9a.46.46 0 0 0-.23.06l-1.63.82.36-1.78a.53.53 0 0 0-.2-.45L2.51 8.71l1.8-.26a.47.47 0 0 0 .37-.27l.83-1.63.81 1.63a.47.47 0 0 0 .37.27l1.8.29L7.2 10a.53.53 0 0 0-.15.45l.29 1.8-1.61-.84a.46.46 0 0 0-.23-.06zm20.95-2.94a1 1 0 0 0-.82-.69L24.1 7.5l-.69-1.39a1.05 1.05 0 0 0-1.82 0L20.9 7.5l-1.53.22a1 1 0 0 0-.56 1.73l1.11 1.09-.27 1.52a1 1 0 0 0 .41 1 1 1 0 0 0 1.07.07l1.37-.72 1.37.72a1 1 0 0 0 .47.12 1 1 0 0 0 1-1.19l-.27-1.52 1.11-1.09a1 1 0 0 0 .27-1.04zM24.2 10a.53.53 0 0 0-.15.45l.29 1.8-1.61-.84a.47.47 0 0 0-.46 0l-1.63.82.36-1.78a.53.53 0 0 0-.2-.45l-1.29-1.29 1.8-.26a.47.47 0 0 0 .37-.27l.83-1.63.81 1.63a.47.47 0 0 0 .37.27l1.8.29z"
          data-name="Layer 2" data-original="#000000" />
      </svg>
      <h3 class="text-white text-4xl font-bold mt-4 counter performance percentage">0%</h3>
      <p class="text-gray-400 font-semibold mt-2">Team Performance</p>
    </div>
    <div class="text-center bg-gray-700 px-4 py-6 border-b-4 border-orange-600 rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-orange-600 w-10 inline-block" viewBox="0 0 512 512">
        <path
          d="M477.797 290.203c0 59.244-23.071 114.942-64.963 156.834S315.244 512 256 512s-114.942-23.071-156.834-64.963-64.963-97.59-64.963-156.834c0-39.621 10.579-78.512 30.595-112.468 19.419-32.944 47.178-60.48 80.276-79.63 7.646-4.427 17.437-1.814 21.861 5.836 4.426 7.648 1.813 17.437-5.836 21.861-53.882 31.175-88.951 87.036-94.189 148.4H84.6c8.837 0 16 7.163 16 16s-7.163 16-16 16H66.884C74.594 398.12 148.083 471.609 240 479.319v-17.717c0-8.837 7.163-16 16-16s16 7.163 16 16v17.717c91.917-7.71 165.406-81.199 173.116-173.116h-17.717c-8.837 0-16-7.163-16-16s7.163-16 16-16h17.69c-5.238-61.364-40.307-117.227-94.19-148.4-7.648-4.425-10.262-14.212-5.836-21.861 4.425-7.648 14.214-10.261 21.861-5.836 33.098 19.148 60.857 46.685 80.277 79.63 20.016 33.955 30.596 72.846 30.596 112.467zm-253.173-220.2 15.259-15.259-.258 71.899c-.031 8.837 7.106 16.025 15.942 16.058h.059c8.81 0 15.967-7.126 15.999-15.942l.259-72.248 15.492 15.492c3.124 3.124 7.219 4.687 11.313 4.687s8.189-1.563 11.313-4.687c6.248-6.248 6.248-16.379 0-22.627L267.313 4.687c-6.248-6.248-16.379-6.248-22.627 0l-42.689 42.689c-6.248 6.248-6.248 16.379 0 22.627s16.379 6.248 22.627 0zM272 174.358v64.628c16.74 5.24 29.977 18.478 35.218 35.217h50.493c8.837 0 16 7.163 16 16s-7.163 16-16 16h-50.493c-6.823 21.795-27.202 37.655-51.218 37.655-29.585 0-53.654-24.069-53.654-53.655 0-24.015 15.86-44.394 37.654-51.217v-64.628c0-8.837 7.163-16 16-16s16 7.163 16 16zm5.655 115.845c0-11.94-9.715-21.654-21.655-21.654s-21.654 9.714-21.654 21.654 9.714 21.655 21.654 21.655 21.655-9.714 21.655-21.655z"
          data-original="#000000" />
      </svg>
      <h3 class="text-white text-4xl font-bold mt-4 counter rating">0.0 / 5</h3>
      <p class="text-gray-400 font-semibold mt-2">Client Feedback</p>
    </div>
  </div>
</div>
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
    <div
      class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
      <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
        <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What is web
          development?</h3>
        <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" alt="down-arrow"
          class="w-6 h-6">
      </div>
      <div class="ans hidden p-4 md:p-5">
        <p class="text-sm">Web development is the process of building, programming, and maintaining websites and web
          applications. Web developers use various coding and programming languages, like HTML, to build sites and
          applications.</p>
      </div>
    </div>
    <div
      class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
      <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
        <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What are web
          development services?</h3>
        <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" alt="down-arrow"
          class="w-6 h-6">
      </div>
      <div class="ans hidden p-4 md:p-5">
        <p class="text-sm">Web development services are services provided by an agency, company, or freelancer that help
          you build your website, implement various website functions and applications, and maintain your site.</p>
      </div>
    </div>

    <div
      class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
      <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
        <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What’s the
          difference between web development and web design? </h3>
        <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" alt="down-arrow"
          class="w-6 h-6">
      </div>
      <div class="ans hidden p-4 md:p-5">
        <p class="text-sm">Web design refers to the aesthetic appearance of your website, like the colors and placement
          of your buttons, the look of your header and footer banners, and more. Web development refers to the
          functionality of your website, like ensuring your buttons route users to the correct place. Web designers
          essentially create the look of your site, and web developers use coding and programming languages to make that
          look come to life and function correctly as a website.</p>
      </div>
    </div>

    <div
      class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
      <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
        <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What is the average
          cost of web development services?</h3>
        <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" alt="down-arrow"
          class="w-6 h-6">
      </div>
      <div class="ans hidden p-4 md:p-5">
        <p class="text-sm">The average cost of web development services can range anywhere from $1,000 – $145,000 per
          website. How much you’ll pay depends on several factors, like the scope of your project, the size of your
          website, your chosen web development agency, and more!</p>
      </div>
    </div>

    <div
      class="faq-item flex flex-col bg-[#F5F5F5] border-2 border-[#00e9c2] rounded-t-[14px] mt-6 transition-all duration-1000">
      <div class="ques flex justify-between items-center p-3 md:p-5 cursor-pointer">
        <h3 class="text-sm md:text-lg font-medium w-[calc(100%-35px)] transition-all duration-1000">What are the
          different types of web development services?</h3>
        <img src="https://www.theknowledgeacademy.com/_public/images/sap-fico/down-arrow.svg" alt="down-arrow"
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
<section class="newslettersection bg-[#556c25] text-white py-20">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <div class="flex items-center">
        <img src="https://www.theaquarious.com/assets/images/mail-ico.svg" alt="email icon" class="h-12 w-12 mr-4">
        <article>
          <h3 class="text-2xl font-bold mb-2">Stay updated</h3>
          <p>Unplug, Untie and Unwind...it's that simple.</p>
        </article>
      </div>
      <div class="pt-3 md:pt-0">
        <form id="subscribeCall" class="flex flex-col md:flex-row">
          <div class="md:w-2/3">
            <div class="relative">
              <input required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email"
                class="form-control bg-transparent border border-white rounded-md py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                id="floatingInput" placeholder=" ">
              <label for="floatingInput"
                class="absolute left-4 -top-3 text-gray-400 text-sm transition-all transform bg-black px-2 py-1 rounded-md pointer-events-none">
                Email address
              </label>
            </div>
          </div>
          <div class="md:w-1/3 mt-4 md:mt-0 ml-0 md:ml-4 flex flex-col items-center md:items-start">
            <input type="submit" name="submit"
              class="custom_button nwsltrsubmit bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md cursor-pointer"
              value="Subscribe now">
            <div class="loading mt-2"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

 
@endsection