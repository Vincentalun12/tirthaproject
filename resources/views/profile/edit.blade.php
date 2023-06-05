<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 pt-24">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
</div>
    <footer class="p-5 bg-birutext shadow py-4 md:px-16 md:py-5">
        <div class="text-center">
          <p class="inline-block text-white font-poppins md:text-[16px] text-[10px]">© 2023<span class="block relative bottom-0">Website By Aseprite</span></p>
        </div>
      </footer>
</x-app-layout>
