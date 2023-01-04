<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


    </head>

    <body>
        <div class="font-gotham  text-dark antialiased">
            <div class="relative w-full">
                <div class="mx-auto">
                    <div
                        class="relative flex flex-col justify-between z-10 bg-red/60/60 backdrop-blur backdrop-opacity-90 lg:max-w-2xl lg:w-full h-screen bg-gradient-to-r from-white via-white/95 to-white/5">

                        <div class="px-4 sm:px-6 lg:mx-6">
                            <nav class=" flex items-center justify-between lg:justify-start py-10" aria-label="Global">
                                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                    <div class="flex items-center justify-between w-auto">
                                        <a href="/">
                                            <span class="sr-only">EMIS School ID</span>
                                            <img class="w-auto h-[6.5rem]" src="https://moe.gov.et/logom.png">
                                        </a>
                                        <div class="-mr-2 flex-0 items-center">
                                            <span
                                                class=" text-xs text-gray leading-relaxed tracking-wide flex pl-3 -mb-6">
                                                FDRE
                                            </span>
                                            <span
                                                class="pt-3 px-3 inline-flex items-center justify-center text-gray text-xl leading-relaxed tracking-wide font-semibold">
                                                Ministry of Education
                                            </span>
                                            <span>
                                                <img src="/ethiopia.png" alt="ethiopian flag" srcset=""
                                                    class="w-7 mx-3 -mt-2">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                                    @if (Route::has('login'))
                                    @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="font-medium text-gray hover:text-dark">dashboard</a>
                                    {{-- @else
                                        <a href="{{ route('login') }}"
                                    class="font-medium text-red/90 hover:text-red/90">Log in</a>
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="font-medium text-red/90 hover:text-red/90">Register</a>
                                    @endif --}}
                                    @endauth
                                    @endif
                                </div>
                            </nav>
                        </div>


                        <main class="mx-auto my-auto">
                            <div class="flex flex-col sm:text-center lg:text-left justify-center lg:mx-10 mx-3">
                                @yield('main')
                            </div>
                        </main>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 w-full">
                    <img class="h-screen w-full  object-cover" src="/images/classroom.webp" alt="">
                </div>
            </div>
        </div>
    </body>

</html>