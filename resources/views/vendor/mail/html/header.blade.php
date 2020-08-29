<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src={{asset('mallow_icon.jpeg')}} class="logo" alt="Mallow Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
