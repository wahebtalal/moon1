@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">
    {{-- Header Here --}}
    <x-header2/>

{{--    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">--}}
{{--        <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->--}}
{{--        <div class="mx-auto max-w-3xl">--}}
            <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
{{--        </div>--}}
{{--    </div>--}}
    <x-fixed.index/>

     {{-- Footer Here --}}
</x-filament-fabricator::layouts.base>
