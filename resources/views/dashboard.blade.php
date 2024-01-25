<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl p-account text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome />  --}}
                <div class="grid grid-cols-2">
                    <div class="">
                        <img src="{{asset('assets/images/buildings.WEBP')}}" alt="" srcset="">
                    </div>
                    <div class="">
                        <img src="{{asset('assets/images/buildings.WEBP')}}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
