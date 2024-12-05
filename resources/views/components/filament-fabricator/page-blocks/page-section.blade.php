@props([
    'blocks' => [],
    'columns' => 1,
])
<div
{{--    {{ $attributes->class("px-4 py-4 md:py-8") }}--}}
{{--@dd($blocks)--}}
>
    <div
        @class([
            'grid gap-10 container',

        ])
        style="grid-template-columns: repeat({{ $columns }}, minmax(0, 1fr));"
    >
        <x-filament-fabricator::page-blocks :blocks="$blocks" />
    </div>
</div>
