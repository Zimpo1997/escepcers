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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
        <x-slot name="appversion">
            <h6 class="mt-1 text-1xl text-sm text-gray-500">Version: {{ config('app.version') }} </h6>
        </x-slot>
    </x-auth-card>
</x-guest-layout>
