<x-guest-layout>
    <x-heading for="heading" :heading="__('Register')"/>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <!-- Name -->
        <div>
            <!--<x-input-label for="name" :value="__('Name')" />-->
            <x-register.input-name id="name" class="block mt-1 w-full" 
                            type="text" 
                            name="name" 
                            :value="old('name')" 
                            placeholder="Name"
                            required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-0" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <!--<x-input-label for="email" :value="__('Email')" />-->
            <x-register.input-email id="email" class="block mt-1 w-full" 
                            type="email" 
                            name="email" 
                            :value="old('email')"
                            placeholder="Email"
                            required autocomplete="username" />

            <x-input-error :messages="$errors->get('email')" class="mt-0" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <!--<x-input-label for="password" :value="__('Password')" />-->

            <x-login.input-password id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-0" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <!--<x-input-label for="password_confirmation" :value="__('Confirm Password')" />-->

            <x-login.input-password id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm Password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-0" />
        </div>

        <div class="flex items-center justify-end mt-4">
           <!--<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-birubut" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>-->

            <x-register.button class="">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        <div class="text-center mt-4">
            <span class="text-sm text-gray-600">Already have an account?
                <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-birubut" href="{{route('login')}}">Sign in</a>
            </span>
    </form>
</x-guest-layout>
