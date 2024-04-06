<x-guest-layout>
    <div class=" h-auto grid grid-cols-2 overflow-hidden">
        <div class=" flex justify-center items-center">
            <img src="{{ asset('assets/image/login.svg') }}" class=" h-96 w-96" >
         </div>
    <x-authentication-card>
        <x-slot name="logo">
             <h5 class="text-2xl font-bold font- ">
                @lang("Welcome to") <span class=" uppercase">DreamDwellings</span></h5>
             <p class=" text-gray-500 text-sm ">Please fill out the form below to create your account and gain access to our platform.</p>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
                @error("name")
                <small class="text-red-500">{{$message}}</small>
              @enderror
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')"  autocomplete="username" />
                @error("email")
                <small class="text-red-500">{{$message}}</small>
              @enderror
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password"  autocomplete="new-password" />
                @error("password")
                <small class="text-red-500">{{$message}}</small>
              @enderror
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"  autocomplete="new-password" />
                @error("password_confirmation")
                <small class="text-red-500">{{$message}}</small>
              @enderror
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
    </div>
</x-guest-layout>
