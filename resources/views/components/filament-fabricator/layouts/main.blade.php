@props(['page'])
{{--<x-filament-fabricator::layouts.base :title="$page->title">--}}
{{--    --}}{{-- Header Here --}}
{{--    <x-inline-scripts/>--}}
{{--<x-hero/>--}}
{{--    <x-header/>--}}
{{--    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />--}}
{{--<x-footer/>--}}
{{--     --}}{{-- Footer Here --}}
{{--</x-filament-fabricator::layouts.base>--}}
<x-layout>

    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />




</x-layout>
