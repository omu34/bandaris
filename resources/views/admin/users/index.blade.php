<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            Accessible only for administrators.
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="hidden   duration-700 ease-in-out bg-no-repeat bg-cover " style="background:url({{ asset('assets/images/home-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;" data-carousel-item>
                <div class="flex max-w-screen-xl ">
                    <div class="w-1/6 md:-ml-24"></div>
                    <div class="justify-start  md:mt-[80px] mt-4 ">
                        <div class="">
                            <h1 class="banner-word">
                                Bandari DT SACCO
                            </h1>
                        </div>
                        <div class="ml-2">
                            <h4 class="banner-h2">
                                Access Bandari DT Sacco <br />services fast and easy
                            </h4>
                        </div>
                        <div class="ml-2 mt-4">
                            <a href="{{ route('register') }}" class="text-white ">
                                <button class="text-white uppercase hover:bg-blue-300 ring-1  ring-white rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    Open Account
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="flex mb-4 max-w-screen-xl mx-auto ">
                    <div class="w-4/5  h-12"></div>
                    <div class="w-1/5  h-12 md:mt-20 ">
                        <img class="" src="{{asset('assets/images/Chat.webp')}}" alt="" srcset="">
                    </div>
                  </div>

            </div>
        </div>
    </div>
</x-admin-layout>
