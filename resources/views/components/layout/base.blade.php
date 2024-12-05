<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel</title>
    {{--        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" />--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet" />--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />--}}
{{--    --}}{{--        <link href="./assets/styles/style.css" rel="stylesheet" />--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>--}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <x-inline-scripts/>
</head>
<body  class="">
{{$slot}}
</body>
{{--<body class="font-sans antialiased dark:bg-black dark:text-white/50">--}}
{{--<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">--}}
{{--    <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />--}}
{{--    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">--}}
{{--        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">--}}
{{--  --}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
</html>
