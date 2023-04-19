<x-guest-layout>
    <x-heading for="heading" :heading="__('Reset Password')"/>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <!--<x-input-label for="email" :value="__('Email')" />-->
            <x-login.input-email id="email" class="block mt-1 w-full" 
                                type="email" 
                                name="email" 
                                :value="old('email', $request->email)" 
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
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
