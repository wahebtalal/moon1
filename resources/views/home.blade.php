<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Travel</title>
    {{--        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />--}}

    {{--        <link href="./assets/styles/style.css" rel="stylesheet" />--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <x-inline-scripts/>
</head>

<body>
<x-hero/>
<!-- Section 1 -->
<x-section.1/>
<!-- Section 1 -->

<!-- Section 2 -->
<x-section.2/>
<!-- Section 2 -->

<div class="mt-10 lg:mt-64 mx-auto container">
    <!-- Section 3 -->
    <x-section.3/>
    <!-- Section 3 -->

    <!-- Section 4 -->
    <x-section.4/>
    <!-- Section 4 -->

    <!-- Section 5 -->

    <x-section.5/>
    <!-- Section 5 -->
</div>
<!-- Section 6 -->
<x-section.6/>
<!-- Section 6 -->
<!-- Section 7 -->
<x-section.7/>
<!-- Section 7 -->
<!-- Footer -->
<x-footer/>
<!-- Footer -->

<script src="./assets/scripts/script.js"></script>
</body>
</html>
