@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">
    {{-- Header Here --}}

<main>


    <x-header/>

    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    <x-fixed.index/></main>
     {{-- Footer Here --}}
</x-filament-fabricator::layouts.base>
