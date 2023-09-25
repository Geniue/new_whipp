@component('mail::message')
# Hello,

We've received a request to change the email address associated with your account. 

@component('mail::button', ['url' => $url])
Confirm New Email
@endcomponent

If you did not request this change, no further action is required.

Thank you,<br>
{{ config('app.name') }}
@endcomponent
