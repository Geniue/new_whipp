<x-mail::layout>
    {{-- Header --}}
    <x-slot name="header">
        <x-mail::header :url="config('app.url')">
            {{ config('app.name') }}
        </x-mail::header>
    </x-slot>

    {{-- Body --}}
    # Hello,

    You've requested to change the email address associated with your account.

    <x-mail::button :url="$url">
        Confirm Email Change
    </x-mail::button>

    If you did not request this change, no further action is required.

    Thank you,<br>
    {{ config('app.name') }}

    {{-- Subcopy --}}
    @isset($subcopy)
        <x-slot name="subcopy">
            <x-mail::subcopy>
                {{ $subcopy }}
            </x-mail::subcopy>
        </x-slot>
    @endisset

    {{-- Footer --}}
    <x-slot name="footer">
        <x-mail::footer>
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        </x-mail::footer>
    </x-slot>
</x-mail::layout>
