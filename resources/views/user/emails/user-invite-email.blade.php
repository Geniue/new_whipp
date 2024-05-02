@component('mail::message')
# Welcome to Whipp Digital!

You have been invited to setup an account at Whipp Digital. Please click the button below to accept the invitation and set up your account.

@component('mail::button', ['url' => $url])
Accept Invitation
@endcomponent

If you did not expect this invitation or believe it was sent in error, please ignore this email.

Thank you for your attention,<br>
<a href="https://whippdigital.com">WhippDigital.com</a>
@endcomponent
