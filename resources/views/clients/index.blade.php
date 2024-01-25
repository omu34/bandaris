<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients Applied') }}
        </h2>
    </x-slot>

    <div class="justify-center min-h-[500px]" style="background:url({{ asset('assets/images/home-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <h1 class="text-7xl text-white text-center"> Employees accessible pages</h1>
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
                        <button class="text-red uppercase hover:bg-blue-300 ring-1  ring-white rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
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
            <div class="w-1/5  h-12 md:pb-14 ">
                <img class="" src="{{asset('assets/images/Chat.webp')}}" alt="" srcset="">
            </div>
        </div>
    </div>



            {{--  <div class="grid grid-cols-2">
                <div class="">
                    <h1 class="why-join">
                        Applid tickets
                    </h1>
                </div>
                <div class="">
                    <h1 class="why-join">
                        messages left by customers
                    </h1>
                </div>
            </div>  --}}
        </div>
    </div>

    <div class="">
        <h1 class="why-join">
          Employee  Can Register Client
        </h1>
    </div>
</x-app-layout>



{{--  <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{asset('assets/images/Logo.WEBP')}}" alt="" srcset="">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" x-data="{role_id: 2}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" x-model="role_id" class="block  mt-1 h-10 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                    <option value="2">Client</option>
                    <option value="3">Employee</option>

                </select>
            </div>

            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="your_address" value="{{ __('Your Address') }}" />
                <x-jet-input id="your_address" class="block mt-1 w-full" type="text" :value="old('your_address')" name="your_address" />
            </div>

            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="your_phone_number" value="{{ __('Your Phone Number') }}" />
                <x-jet-input id="your_phone_number" class="block mt-1 w-full" type="text" :value="old('your_phone_number')" name="your_your_number" />
            </div>

            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="employee_title" value="{{ __('Employee Title') }}" />
                <x-jet-input id="employee_title" class="block mt-1 w-full" type="text" :value="old('employee_title')" name="employee_title" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>  --}}

