@component('mail::message')
# Hurray your Whipp Digital product is here!

@component('mail::button', ['url' => $url])
Check Invoice
@endcomponent

If you did not expect this invitation or believe it was sent in error, please ignore this email.

Thank you for your attention,<br>
The {{ config('app.name') }} Team
@endcomponent
