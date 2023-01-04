<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{'darkMode': true, 'loadme':true}" x-init="
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark': darkMode === true}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" class="bg-white" href="https://moe.gov.et/logom.png">
        <title>{{ config('app.name', 'Learn English') }}</title>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body x-show="loadme" class="font-gotham  antialiased bg-[#ffffff] dark:bg-[#151517]" style="display: none;">
        <x-jet-banner />

        <div class="relative">
            <x-side-navigation.desktop />
            <div class=" md:pl-64 flex flex-col flex-1 min-h-screen">
                @livewire('navigation-menu')
                <!-- Page Heading -->
                @if (isset($header))
                <header class="bg-white dark:bg-dark/90 shadow mx-3 rounded-lg">
                    <div
                        class="mx-auto py-6 px-4 sm:px-6 lg:px-8 rounded-lg flex justify-between items-center dark:text-light">
                        {{ $header }}
                        @if (isset($actionButton))
                        <div class="flex justify-between gap-3">
                            {{ $actionButton }}
                        </div>
                        @endif
                    </div>
                </header>
                @endif
                <!-- Page Content -->
                <main class="m-3 h-full mb-44">
                    <x-validation-errors />
                    <x-session-messages />
                    {{ $slot }}
                    {{-- @yield('content') --}}
                </main>
            </div>
        </div>
        <x-toast.notification />
        @stack('modals')
        {{-- <script src="/js/tabs.js"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
            data-turbolinks-eval="false" data-turbo-eval="false"></script> --}}

        @livewireScripts
    </body>

</html>