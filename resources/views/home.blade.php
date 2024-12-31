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
            <button id="contactBtn"
              class='bg-black hover:bg-[#222] text-white flex items-center transition-all font-semibold rounded-md px-3 py-3 text-sm md:text-lg md:px-5 md:py-3'>CONTACT
              US TODAY
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
                <path
                  d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                  data-original="#000000" />
              </svg>
            </button>
            <button
              class='bg-transparent border-2 border-[#333] flex items-center transition-all font-semibold rounded-md px-3 py-2 md:px-5 md:py-3'>
              CHECK PACKAGES
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
                <path
                  d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                  data-original="#000000" />
              </svg>
            </button>
          </div>
        </div>
        <div class="max-lg:order-first lg:h-full">
          <div class="relative h-[130px] lg:h-[480px] w-full">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735627971download.jpg" alt="banner img"
              class="w-full h-full object-contain lg:object-cover" />
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

<section>

</section>

<section id="contact">
  <div class="w-full bg-black py-16">
    <div class="w-full" id="contact">
      <div class="pardot-form w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                    <a href="mailto:contact@appnovation.com" class="text-blue-600 hover:text-blue-800">
                      contact@appnovation.com
                    </a>
                    or contact us directly by phone at one of our many
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
                    <a href="mailto:contact@appnovation.com"
                      class="text-[#00e9c2] hover:text-[#baf7e7] text-sm underline transition-colors duration-200">
                      contact@appnovation.com
                    </a>
                  </div>
                  <button type="submit"
                    class="bg-[#00e9c2] hover:bg-[#baf7e7] text-gray-800 px-10 py-4 rounded-md transition-colors duration-200 uppercase text-sm font-normal tracking-wider order-1">
                    Submit Now
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <script>
   document.addEventListener('DOMContentLoaded', function() {
      const contactBtn = document.getElementById('contactBtn');
      
      if (contactBtn) {
          contactBtn.addEventListener('click', function() {
              const contactSection = document.getElementById('contact');
              
              if (!contactSection) {
                  console.error('Contact section not found');
                  return;
              }
              
              contactSection.scrollIntoView({ 
                  behavior: 'smooth',
                  block: 'start'
              });
          });
      }
  });
</script> --}}
@endsection