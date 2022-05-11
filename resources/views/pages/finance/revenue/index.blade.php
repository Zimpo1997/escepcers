<x-finance-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('จัดการรายรับ') }}
        </h2>
    </x-slot>

    <x-breadcrumb :paths="$currentPath" />

    <div class="py-4">
        <div class="ml-4 mx-auto px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-finance-layout>
