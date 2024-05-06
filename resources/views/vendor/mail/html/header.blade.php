@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<img src="https://whippdigital.com/assets/imgs/logos/maximized_whipplogo.png" class="logo" alt="Whipp Digital Logo" width="150" height="150">
@endif
</a>
</td>
</tr>
