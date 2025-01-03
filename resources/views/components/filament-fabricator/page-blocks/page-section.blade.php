@props([
    'blocks' => [],
    'columns' => [],
    'layout' => 'grid',
    'gap' => '4', // Default gap for grid and flex
    'row_gap' => null, // Row gap for grid (optional)
    'column_gap' => null, // Column gap for grid (optional)
    'flex_alignment' => 'center', // Default alignment for flex
    'flex_direction' => 'row', // Default flex direction
    'flex_wrap' => 'nowrap', // Default flex-wrap
    'justify_content' => 'center', // Default justify-content
    'justify_items' => 'center', // Default justify-items
])

@php
    // Transform columns into a keyed array for easy access
    $columnsByBreakpoint = collect($columns)
        ->mapWithKeys(fn ($column) => [$column['breakpoint'] => $column['value']]);
@endphp
{{--<div class="hero bg-base-200 min-h-screen">--}}
{{--    <div class="hero-content text-center">--}}

<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">    <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
{{--    <div class="mx-auto max-w-3xl">--}}

@if ($layout === 'grid')
    <div
        class=" mb-10 grid {{ $row_gap ? 'gap-x-' . $row_gap : '' }} {{ $column_gap ? 'gap-y-' . $column_gap : '' }} gap-{{ $gap }}
            {{ $columnsByBreakpoint->get('default') ? 'grid-cols-' . $columnsByBreakpoint->get('default') : 'grid-cols-1' }}
            {{ $columnsByBreakpoint->get('sm') ? 'sm:grid-cols-' . $columnsByBreakpoint->get('sm') : '' }}
            {{ $columnsByBreakpoint->get('md') ? 'md:grid-cols-' . $columnsByBreakpoint->get('md') : '' }}
            {{ $columnsByBreakpoint->get('lg') ? 'lg:grid-cols-' . $columnsByBreakpoint->get('lg') : '' }}
            {{ $columnsByBreakpoint->get('xl') ? 'xl:grid-cols-' . $columnsByBreakpoint->get('xl') : '' }}

             justify-items-{{ $justify_items }}"
    >
        <x-filament-fabricator::page-blocks :blocks="$blocks" />
    </div>
@elseif ($layout === 'flex')
    <div
        class="mb-10 flex gap-{{ $gap }} flex-{{ $flex_direction }} items-{{ $flex_alignment }} flex-{{ $flex_wrap }} justify-{{ $justify_content }}  "
    >
        <x-filament-fabricator::page-blocks :blocks="$blocks" />
    </div>
@endif
{{--    </div>--}}
</div>
