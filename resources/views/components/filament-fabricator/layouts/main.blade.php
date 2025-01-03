@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">
    {{-- Header Here --}}
    <x-header/>

    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    <x-fixed.index/>

     {{-- Footer Here --}}
</x-filament-fabricator::layouts.base>
