import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',


        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        // './vendor/diogogpinto/filament-auth-ui-enhancer/resources/**/*.blade.php',


    ],
    safelist: [
        // Grid column patterns
        {
            pattern: /grid-cols-\d+/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
        // Flex item alignment
        {
            pattern: /items-(start|center|end|stretch)/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
        // Flex content justification
        {
            pattern: /justify-(start|center|end|between|around|evenly)/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
        // Flex content wrapping
        {
            pattern: /flex-(nowrap|wrap|wrap-reverse)/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
        // Justify items alignment for flex
        {
            pattern: /justify-items-(start|center|end|stretch)/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
        // Gap utility patterns
        {
            pattern: /gap-\d+/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
        // Additional patterns for row and column gaps
        {
            pattern: /gap-x-\d+/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
        {
            pattern: /gap-y-\d+/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
        // Flex direction patterns
        {
            pattern: /flex-(row|row-reverse|col|col-reverse)/,
            variants: ['sm', 'md', 'lg', 'xl'],
        },
    ]
    ,
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                noor: ['Noor', 'sans-serif'], // Define your custom fonts family

            },
         },
    },

    plugins: [
        require('daisyui'),



    ],
    daisyui: {
        themes: false, // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "light", // name of one of the included themes for dark mode
        base: false, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: false, // adFds responsive and modifier utility classes
        // prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: false, // Shows info about daisyUI version and used config in the console when building your CSS
        // themeRoot: ":root", // The element that receives theme color CSS variables
    },

};
