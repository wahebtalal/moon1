import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/solution-forest/filament-tree/resources/**/*.blade.php',

        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require('daisyui'),

    ],
    daisyui: {
        themes: [

            {
                light: {
                    ...require("daisyui/src/theming/themes")["light"],
                    primary: "#262262",
                    secondary: "#FBB040",
                },
            },],
    },
};
