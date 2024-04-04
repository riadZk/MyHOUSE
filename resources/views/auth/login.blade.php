<x-guest-layout>
   <div class=" h-screen grid grid-cols-2 overflow-hidden">

       <x-authentication-card>
           <x-slot name="logo">
               {{-- <x-authentication-card-logo /> --}}
                <h5 class="text-2xl font-bold font- ">
                   @lang("Welcome to") <span class=" uppercase">DreamDwellings</span>                </h5>
                <p class=" text-gray-500 text-sm ">Please sign-in to your account and start the adventure</p>
           </x-slot>

           @session('status')
               <div class="mb-4 font-medium text-sm text-green-600">
                   {{ $value }}
               </div>
           @endsession

           <form method="POST" action="{{ route('login') }}">
               @csrf

               <div>
                   <x-label for="email" value="{{ __('Email') }}" />
                   <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autofocus autocomplete="username" />
                   @error("email")
                      <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>

               <div class="mt-4">
                   <x-label for="password" value="{{ __('Password') }}" />
                   <x-input id="password" class="block mt-1 w-full" type="password" name="password"  autocomplete="current-password" />
                    @error("password")
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>

               <div class="flex mt-4  justify-between">
                   <label for="remember_me" class="flex items-center">
                       <x-checkbox id="remember_me" name="remember" />
                       <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                   </label>
                   @if (Route::has('password.request'))
                   <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                       {{ __('Forgot your password?') }}
                   </a>
                @endif
               </div>

               <div class="flex text-center mt-4">
                   <x-button class="w-full flex justify-center">
                      {{ __('Log in') }}
                   </x-button>
               </div>
               <div class="mt-4 text-center">
                <p class=" font-medium text-sm">@lang("Don't have an account")? <a href="{{ Route('register') }}" class=" text-customColor">@lang("Sign up")</a></p>
               </div>
           </form>
       </x-authentication-card>
     <div class=" flex justify-center items-center">
        <img src="{{ asset('assets/image/login.svg') }}" class=" h-96 w-96" >
     </div>

    </div>
</x-guest-layout>
