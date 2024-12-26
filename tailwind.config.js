import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',


        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/diogogpinto/filament-auth-ui-enhancer/resources/**/*.blade.php',

    ],
    safelist: [
        // Grid column patterns
        {
            pattern: /grid-cols-\d+/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
        // Flex item alignment

    ]
    ,
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [

    ],

};
