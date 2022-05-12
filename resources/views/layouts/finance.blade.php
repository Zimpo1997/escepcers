<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | {{ config('app.hotname') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased bg-gray-100 dark-mode:bg-gray-900">
    <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
        <div @click.away="open = false"
            class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800"
            x-data="{ open: false }">
            <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                <a href="#"
                    class="mx-auto text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                    <h4 class="mt-1 text-1xl font-bold leading-7 text-gray-900 text-center ">
                        {{ config('app.name') }}</h4>
                </a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="relative flex items-center">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="flex-shrink mx-4 text-gray-300">รายการ</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>
            <nav :class="{ 'block': open, 'hidden': !open }"
                class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                <x-side-link :href="route('finance.dashboard')" :active="request()->routeIs('finance.dashboard')">
                    {{ __('Dashboard') }}
                </x-side-link>
                <x-side-link :href="route('finance.revenue.create')" :active="request()->routeIs('finance.revenue.create')">
                    {{ __('บันทึกรายรับ') }}
                </x-side-link>
                <x-side-link :href="route('finance.revenue.index')" :active="request()->routeIs('finance.revenue.index')">
                    {{ __('จัดการรายรับ') }}
                </x-side-link>
                <x-side-link :href="route('finance.revenue.index')" :active="request()->routeIs('finance.revenue.index')">
                    {{ __('รายงานรายรับ') }}
                </x-side-link>
                <x-side-link :href="route('finance.revenue.index')" :active="request()->routeIs('finance.revenue.index')">
                    {{ __('จัดการใบนำส่ง') }}
                </x-side-link>
                <x-side-link :href="route('finance.revenue.index')" :active="request()->routeIs('finance.revenue.index')">
                    {{ __('รายงานการนำส่ง') }}
                </x-side-link>

            </nav>
        </div>

        <div class="w-full">
            <!-- Page Heading -->
            {{-- <header class="bg-gray-400 shadow">
                <div class="ml-4 mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}
            <nav class="bg-gray-800 hidden sm:block">
                <div class="max-w-screen mr-auto px-2 sm:px-6 lg:px-8">
                    <div class="relative flex items-center justify-between h-16">
                        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                            <div class="flex-shrink-0 flex items-center">
                                {{ $header }}
                            </div>
                        </div>
                        <div
                            class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            <button type="button"
                                class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                <!-- Heroicon name: outline/bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                    <button @click="open = !open" type="button"
                                        class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                    </button>
                                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="transform opacity-0 scale-95"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="transform opacity-100 scale-100"
                                        x-transition:leave-end="transform opacity-0 scale-95"
                                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm font-semibold bg-transparent rounded-t-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-indigo-600 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                            role="menuitem" tabindex="-1"
                                            id="user-menu-item-0">{{ __('Profile') }}</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-indigo-600 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                            role="menuitem" tabindex="-1"
                                            id="user-menu-item-1">{{ __('Setting') }}</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="block px-4 py-2 text-sm font-semibold bg-transparent rounded-b-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-indigo-600 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                                href="{{ route('logout') }}" role="menuitem" tabindex="-1"
                                                id="user-menu-item-2"
                                                onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
