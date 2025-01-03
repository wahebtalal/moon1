@php
    $state = $getState();
    $color = $getColor($state) ?? 'gray';
@endphp
<div class="px-4 py-3">
    @if($icon = $state)
        <x-icon name="{{ $icon }}" style="height: 100px; width: 100px; color: {{ $color }}" />

    @endif
</div>
