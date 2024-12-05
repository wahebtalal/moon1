<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
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
        <title>Moon1 | موون1 </title>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
{{--        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />--}}
{{--        <link rel="stylesheet" href="/storage/css/style.css" />--}}
        @vite(['resources/js/app.js','resources/css/app.css'])
        <style>
            @font-face {
                font-family: Noor;
                font-weight: 400;
                src: url(/font/AGCRegular.ttf) format("truetype");
            }
            @font-face {
                font-family: Noor;
                font-weight: 500;
                src: url(/font/AGCRegular.ttf) format("truetype");
            }

            * {
                font-family: "Noor", serif;
            }
        </style>
    </head>

    <body>
    <x-header/>
    <x-about-us/>
    <x-our-message/>
<x-service/>
    <x-our-customers/>



       <x-goal/>






     <x-footer/>
{{--        <script src="/js/script.js"></script>--}}
    </body>
</html>
