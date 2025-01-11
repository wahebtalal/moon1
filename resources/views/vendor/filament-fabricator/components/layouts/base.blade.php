@props([
    'title' => null,
    'dir' => 'rtl'
])

<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ $dir }}"
    class="filament-fabricator"
>
    <head>
        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::head.start') }}

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getMeta() as $tag)
            {{ $tag }}
        @endforeach

        @if ($favicon = \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getFavicon())
            <link rel="icon" href="{{ $favicon }}">
        @endif

        <title>{{ $title ? "{$title}  " : null }} </title>


        <style>
            [x-cloak=""], [x-cloak="x-cloak"], [x-cloak="1"] { display: none !important; }
        </style>


        @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getStyles() as $name => $path)
            @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
                {!! $path !!}
            @else
                <link rel="stylesheet" href="{{ $path }}" />
            @endif
        @endforeach
        @php

            $meta=setting('seo');
        @endphp
        <link rel="icon" type="image/png" href="/storage/assets/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/storage/assets/favicon.svg" />
        <link rel="shortcut icon" href="/storage/assets/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/storage/assets/apple-touch-icon.png" />
        <meta name="apple-mobile-web-app-title" content="Moon1" />
        <link rel="manifest" href="/storage/assets/site.webmanifest" />

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0' ">
        <meta name="description" content="{{ $meta['description'] }}">
        <meta name="keywords" content="{{ $meta['keywords'] }}">
        <meta name="author" content="{{ $meta['author'] }}">
        <meta name="robots" content="{{ $meta['robots'] }}">

        <meta property="og:type" content="{{ $meta['og_type'] }}">
        <meta property="og:title" content="{{ $meta['og_title'] }}">
        <meta property="og:description" content="{{ $meta['og_description'] }}">
        <meta property="og:image" content="{{ $meta['og_image'] }}">
        <meta property="og:url" content="{{ $meta['og_url'] }}">

        <meta name="twitter:card" content="{{ $meta['twitter_card'] }}">
        <meta name="twitter:title" content="{{ $meta['twitter_title'] }}">
        <meta name="twitter:description" content="{{ $meta['twitter_description'] }}">
        <meta name="twitter:image" content="{{ $meta['twitter_image'] }}">
{{--        <title>Moon1 | موون1 </title>--}}
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
        <link href="{{url('/font/css')}}" rel="stylesheet" />
        {{--        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />--}}
        {{--        <link rel="stylesheet" href="/storage/css/style.css" />--}}
{{--        @vite(['resources/js/app.js','resources/css/app.css'])--}}
        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::head.end') }}
    </head>

    <body class="filament-fabricator-body">
        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::body.start') }}
  {{ $slot }}

        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::scripts.start') }}

        @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getScripts() as $name => $path)
            @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
                {!! $path !!}
            @else
                <script defer src="{{ $path }}"></script>
            @endif
        @endforeach

        @stack('scripts')
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-7F2GSZ9DW8"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-7F2GSZ9DW8');
        </script>
        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::scripts.end') }}

        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::body.end') }}
    </body>

</html>
