@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://w7.pngwing.com/pngs/703/568/png-transparent-menu-restaurant-cafe-french-cuisine-template-menu-template-soup-food.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
