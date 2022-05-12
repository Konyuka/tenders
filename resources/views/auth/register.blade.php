
<x-guest-layout>

  <section class="relative py-20 2xl:py-40 bg-gradient-to-r from-indigo-300 to-indigo-500 overflow-hidden h-screen">
    <img class="hidden lg:block absolute inset-0 mt-32" src="zospace-assets/lines/line-mountain.svg" alt="">
    <img class="hidden lg:block absolute inset-y-0 right-0 -mr-40 -mt-32" src="zospace-assets/lines/line-right-long.svg" alt="">
    <div class="relative container px-4 mx-auto">
        <div class="max-w-5xl mx-auto">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
            <div class="max-w-md">
                <a href="/" class="mt-8 mb-12 text-6xl font-bold font-heading font-heading-font text-white"> <i class="fas fa-caret-left"></i> Bidders Portal</a>
            </div>
            </div>
            <div class="w-full lg:w-1/2 px-4">
            <div class="px-6 lg:px-20 py-12 lg:py-12 bg-gradient-to-r from-indigo-500 to-indigo-800 rounded-lg">
                <form method="POST" action="{{ route('register') }}" >
                    @csrf
                <h3 class="mb-10 text-2xl text-white font-bold font-heading">Sign up for an Account</h3>
                <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
                    <span class="inline-block pr-3 py-2 border-r border-gray-50">
                    <i class="fas fa-user text-indigo-700"></i>
                    </span>
                    <input class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-900 rounded-r-full focus:outline-none" type="text" id="name" name="name" placeholder="Full Name">
                </div>
                <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
                    <span class="inline-block pr-3 py-2 border-r border-gray-50">
                    <i class="fas fa-at text-indigo-700"></i>
                    </span>
                    <input class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-900 rounded-r-full focus:outline-none" type="email" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
                    <span class="inline-block pr-3 py-2 border-r border-gray-50">
                    <i class="fas fa-phone text-indigo-700"></i>
                    </span>
                    <input class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-900 rounded-r-full focus:outline-none" type="number" id="phone" name="phone" placeholder="Phone Number">
                </div>
                <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
                    <span class="inline-block pr-3 py-2 border-r border-gray-50">
                    <i class="fas fa-key text-indigo-700"></i>
                    </span>
                    <input class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-900 rounded-r-full focus:outline-none" type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="flex items-center pl-6 mb-6 bg-white rounded-full">
                    <span class="inline-block pr-3 py-2 border-r border-gray-50">
                    <i class="fas fa-key text-indigo-700"></i>
                    </span>
                    <input class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-900 rounded-r-full focus:outline-none" type="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat password">
                </div>
                <div class="inline-flex mb-10">
                    <input class="mr-4" type="checkbox">
                    <p class="-mt-1 text-xs text-gray-200 font-primary-font">By singning up, you agree to our <a class="text-white" href="#">Terms, Data Policy</a> and <a class="text-white" href="#">Cookies.</a></p>
                </div>

                {{-- <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div> --}}

                <button type="submit" class="py-4 w-full bg-indigo-700 hover:bg-blue-600 text-white font-bold rounded-full transition duration-200">Get started</button>

                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

</x-guest-layout>

{{-- <script>
</script> --}}


{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
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
</x-guest-layout> --}}
