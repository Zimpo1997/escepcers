<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo width="200" height="200" class="fill-current text-gray-500" />
            </a>
        </x-slot>
        <x-slot name="apptitle">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 ">{{ config('app.name') }}</h2>
            <h4 class="mt-1 text-2xl font-bold leading-7 text-gray-900 text-center ">{{ config('app.hotname') }}</h4>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
        <x-slot name="appversion">
            <h6 class="mt-1 text-1xl text-sm text-gray-500">Version: {{ config('app.version') }} </h6>
        </x-slot>
    </x-auth-card>
</x-guest-layout>
