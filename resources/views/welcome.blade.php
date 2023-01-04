@extends('layouts.guest')
@section('main')
<main class="mx-auto max-w-7xl my-auto">
    <div class="flex flex-col sm:text-center lg:text-left justify-center mx-14">
        <h1 class="text-4xl tracking-tight font-extrabold text-dark sm:text-5xl md:text-6xl">
            <span class="block xl:inline">EMIS </span>
            <span class="block text-red xl:inline"> School ID</span>
        </h1>
        <p class="mt-3 text-base text-dark/70 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Digital Unique School ID & Profile Management Application
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
                @if (Route::has('login'))
                @auth
                <a href="{{ route('dashboard') }}"
                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red/95 hover:bg-red md:py-4 md:text-lg md:px-10">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}"
                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red/95 hover:bg-red md:py-4 md:text-lg md:px-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                        class="bi bi-box-arrow-in-right mr-3 text-xl" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                        <path fill-rule="evenodd"
                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>

                    Log in
                </a>
                @endauth
                @endif
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="/register"
                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue bg-blue/20 hover:bg-blue/40 md:py-4 md:text-lg md:px-10">
                    Register
                </a>
            </div>
        </div>
    </div>
</main>
@endsection