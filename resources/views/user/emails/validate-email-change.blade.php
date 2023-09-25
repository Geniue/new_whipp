@component('mail::message')
# Hello,

You've requested to change the email address associated with your account.

@component('mail::button', ['url' => $url])
Confirm Email Change
@endcomponent

If you did not request this change, no further action is required.

Thank you,<br>
{{ config('app.name') }}
@endcomponent
