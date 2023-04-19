<x-guest-layout>
    <!-- Session Status -->
    <x-heading for="heading" :heading="__('Login')" class=""/>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        

        <!-- Email Address -->
        <div>
         <!--   <x-input-label for="email" :value="__('Email')" /> -->

            <x-login.input-email id="email" class="block mt-1 w-full" 
                                    type="email" 
                                    name="email" 
                                    :value="old('email')" 
                                    placeholder="Email" 
                                    required autofocus autocomplete="username" />

            <x-input-error :messages="$errors->get('email')" class="mt-0" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <!--<x-input-label for="password" :value="__('Password')" />-->

            <x-login.input-password id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-0" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-birubut shadow-sm focus:ring-birubut" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                <div class="ml-auto">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-birubut" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
                @endif
            </div>
        </div>
        
        <div class="flex items-center justify-center mt-4">
            <x-login.button class="text-center">
                {{ __('Log in') }}
            </x-login.button>
        </div>
        <div class="text-center mt-4">
            <span class="text-sm text-gray-600">Don't have an account?
                <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-birubut" href="{{route('register')}}">Sign up</a>
            </span>
    </form>
</x-guest-layout>
