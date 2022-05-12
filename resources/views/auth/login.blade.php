<x-guest-layout>
    <section class="relative py-40 2xl:py-40 bg-gradient-to-r from-indigo-300 to-indigo-500 overflow-hidden h-screen">
    <img class="hidden lg:block absolute inset-0 mt-32" src="zospace-assets/lines/line-mountain.svg" alt="">
    <img class="hidden lg:block absolute inset-y-0 right-0 -mr-40 -mt-32" src="zospace-assets/lines/line-right-long.svg" alt="">
    <div class="relative container px-4 mx-auto">
        <div class="max-w-5xl mx-auto">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
            <div class="max-w-md">
                <a href="/" class="mt-8 mb-12 text-6xl font-bold font-heading font-heading-font text-white"> <i class="fas fa-caret-left"></i> Bidders Portal</a>
                <x-jet-validation-errors class="m-4" />
            </div>
            </div>
            <div class="w-full lg:w-1/2 px-4">

            <div class="px-6 lg:px-20 py-12 lg:py-12 bg-gradient-to-r from-indigo-500 to-indigo-800 rounded-lg">
                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                <h3 class="mb-10 text-2xl text-white font-bold font-heading">Sign in to your Account</h3>
                <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
                    <span class="inline-block pr-3 py-2 border-r border-gray-50">
                    <i class="fas fa-at text-indigo-700"></i>
                    </span>
                    <input class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-900 rounded-r-full focus:outline-none" type="email" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
                    <span class="inline-block pr-3 py-2 border-r border-gray-50">
                    <i class="fas fa-key text-indigo-700"></i>
                    </span>
                    <input class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-900 rounded-r-full focus:outline-none" type="password" id="password" name="password" placeholder="Password">
                </div>

                <button type="submit" class="py-4 w-full bg-indigo-700 hover:bg-blue-600 text-white font-bold rounded-full transition duration-200">Sign In</button>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    {{-- <x-jet-button class="ml-4">
                        {{ __('Login') }}
                    </x-jet-button> --}}
                </div>

                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
  </section>
</x-guest-layout>

