@component('mail::message')
# A new invoice was added to your dashboard. Check it out here.

@component('mail::button', ['url' => $url])
Check Invoice
@endcomponent

If you did not expect this invitation or believe it was sent in error, please ignore this email.

Thank you for your attention,<br>
<a href="https://whippdigital.com">WhippDigital.com</a>
@endcomponent
