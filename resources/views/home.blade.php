<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <div class="lg:min-h-[560px] bg-blue-100 px-4 sm:px-10">
      <div class="max-w-7xl w-full mx-auto py-16">
        <div class="grid lg:grid-cols-2 justify-center items-center gap-10">
          <div>
            <h1 class="md:text-5xl text-4xl font-bold mb-6 md:!leading-[55px]">Website Design Services that Maximize Traffic, Engagement, and Conversion</h1>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full sm:w-1/2 px-4">
                    <ul class="">
                        <li class="flex items-center p-2  transition-all duration-300 group">
                            <div class="flex items-center justify-center w-8 h-8 bg-green-100 rounded-full group-hover:bg-green-500 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="flex-1 ml-3 font-medium text-gray-700 group-hover:text-green-600">100% Mobile Friendly</span>
                        </li>
                        <li class="flex items-center p-2  transition-all duration-300 group">
                            <div class="flex items-center justify-center w-8 h-8 bg-green-100 rounded-full group-hover:bg-green-500 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="flex-1 ml-3 font-medium text-gray-700 group-hover:text-green-600">Conversion Friendly Layout</span>
                        </li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/2 px-4">
                    <ul class="">
                        <li class="flex items-center p-2  transition-all duration-300 group">
                            <div class="flex items-center justify-center w-8 h-8 bg-green-100 rounded-full group-hover:bg-green-500 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="flex-1 ml-3 font-medium text-gray-700 group-hover:text-green-600">Stunning Design</span>
                        </li>
                        <li class="flex items-center p-2  transition-all duration-300 group">
                            <div class="flex items-center justify-center w-8 h-8 bg-green-100 rounded-full group-hover:bg-green-500 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="flex-1 ml-3 font-medium text-gray-700 group-hover:text-green-600">Effective Call to Action</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="flex flex-wrap gap-y-4 gap-x-8 mt-8">
              <button
                class='bg-black hover:bg-[#222] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4'>GET
                A QUOTE
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                  viewBox="0 0 492.004 492.004">
                  <path
                    d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                    data-original="#000000" />
                </svg>
              </button>
              <button
                class='bg-transparent border-2 border-[#333] flex items-center transition-all font-semibold rounded-md px-5 py-2'>
               CHECK PACKAGES
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                  viewBox="0 0 492.004 492.004">
                  <path
                    d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                    data-original="#000000" />
                </svg>
              </button>
            </div>
          </div>
          <div class="max-lg:mt-12 h-full">
            <img src="https://readymadeui.com/analtsis.webp" alt="banner img" class="w-full h-full object-cover" />
          </div>
        </div>
      </div>
    </div>
@endsection