@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<img src="https://whippdigital.com/assets/imgs/logos/email_logo_1.png" class="logo" alt="Whipp Digital Logo">
@endif
</a>
</td>
</tr>
