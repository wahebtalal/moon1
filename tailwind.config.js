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
        './vendor/awcodes/filament-tiptap-editor/resources/**/*.blade.php',


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
            colors: {
                custom: {
                    50: 'rgba(var(--c-50), <alpha-value>)',
                    100: 'rgba(var(--c-100), <alpha-value>)',
                    200: 'rgba(var(--c-200), <alpha-value>)',
                    300: 'rgba(var(--c-300), <alpha-value>)',
                    400: 'rgba(var(--c-400), <alpha-value>)',
                    500: 'rgba(var(--c-500), <alpha-value>)',
                    600: 'rgba(var(--c-600), <alpha-value>)',
                    700: 'rgba(var(--c-700), <alpha-value>)',
                    800: 'rgba(var(--c-800), <alpha-value>)',
                    900: 'rgba(var(--c-900), <alpha-value>)',
                    950: 'rgba(var(--c-950), <alpha-value>)',
                },
                danger: {
                    50: 'rgba(var(--danger-50), <alpha-value>)',
                    100: 'rgba(var(--danger-100), <alpha-value>)',
                    200: 'rgba(var(--danger-200), <alpha-value>)',
                    300: 'rgba(var(--danger-300), <alpha-value>)',
                    400: 'rgba(var(--danger-400), <alpha-value>)',
                    500: 'rgba(var(--danger-500), <alpha-value>)',
                    600: 'rgba(var(--danger-600), <alpha-value>)',
                    700: 'rgba(var(--danger-700), <alpha-value>)',
                    800: 'rgba(var(--danger-800), <alpha-value>)',
                    900: 'rgba(var(--danger-900), <alpha-value>)',
                    950: 'rgba(var(--danger-950), <alpha-value>)',
                },
                gray: {
                    50: 'rgba(var(--gray-50), <alpha-value>)',
                    100: 'rgba(var(--gray-100), <alpha-value>)',
                    200: 'rgba(var(--gray-200), <alpha-value>)',
                    300: 'rgba(var(--gray-300), <alpha-value>)',
                    400: 'rgba(var(--gray-400), <alpha-value>)',
                    500: 'rgba(var(--gray-500), <alpha-value>)',
                    600: 'rgba(var(--gray-600), <alpha-value>)',
                    700: 'rgba(var(--gray-700), <alpha-value>)',
                    800: 'rgba(var(--gray-800), <alpha-value>)',
                    900: 'rgba(var(--gray-900), <alpha-value>)',
                    950: 'rgba(var(--gray-950), <alpha-value>)',
                },
                info: {
                    50: 'rgba(var(--info-50), <alpha-value>)',
                    100: 'rgba(var(--info-100), <alpha-value>)',
                    200: 'rgba(var(--info-200), <alpha-value>)',
                    300: 'rgba(var(--info-300), <alpha-value>)',
                    400: 'rgba(var(--info-400), <alpha-value>)',
                    500: 'rgba(var(--info-500), <alpha-value>)',
                    600: 'rgba(var(--info-600), <alpha-value>)',
                    700: 'rgba(var(--info-700), <alpha-value>)',
                    800: 'rgba(var(--info-800), <alpha-value>)',
                    900: 'rgba(var(--info-900), <alpha-value>)',
                    950: 'rgba(var(--info-950), <alpha-value>)',
                },
                primary: {
                    50: 'rgba(var(--primary-50), <alpha-value>)',
                    100: 'rgba(var(--primary-100), <alpha-value>)',
                    200: 'rgba(var(--primary-200), <alpha-value>)',
                    300: 'rgba(var(--primary-300), <alpha-value>)',
                    400: 'rgba(var(--primary-400), <alpha-value>)',
                    500: 'rgba(var(--primary-500), <alpha-value>)',
                    600: 'rgba(var(--primary-600), <alpha-value>)',
                    700: 'rgba(var(--primary-700), <alpha-value>)',
                    800: 'rgba(var(--primary-800), <alpha-value>)',
                    900: 'rgba(var(--primary-900), <alpha-value>)',
                    950: 'rgba(var(--primary-950), <alpha-value>)',
                },
                success: {
                    50: 'rgba(var(--success-50), <alpha-value>)',
                    100: 'rgba(var(--success-100), <alpha-value>)',
                    200: 'rgba(var(--success-200), <alpha-value>)',
                    300: 'rgba(var(--success-300), <alpha-value>)',
                    400: 'rgba(var(--success-400), <alpha-value>)',
                    500: 'rgba(var(--success-500), <alpha-value>)',
                    600: 'rgba(var(--success-600), <alpha-value>)',
                    700: 'rgba(var(--success-700), <alpha-value>)',
                    800: 'rgba(var(--success-800), <alpha-value>)',
                    900: 'rgba(var(--success-900), <alpha-value>)',
                    950: 'rgba(var(--success-950), <alpha-value>)',
                },
                warning: {
                    50: 'rgba(var(--warning-50), <alpha-value>)',
                    100: 'rgba(var(--warning-100), <alpha-value>)',
                    200: 'rgba(var(--warning-200), <alpha-value>)',
                    300: 'rgba(var(--warning-300), <alpha-value>)',
                    400: 'rgba(var(--warning-400), <alpha-value>)',
                    500: 'rgba(var(--warning-500), <alpha-value>)',
                    600: 'rgba(var(--warning-600), <alpha-value>)',
                    700: 'rgba(var(--warning-700), <alpha-value>)',
                    800: 'rgba(var(--warning-800), <alpha-value>)',
                    900: 'rgba(var(--warning-900), <alpha-value>)',
                    950: 'rgba(var(--warning-950), <alpha-value>)',
                },
            },
        },
    },

    plugins: [
        require('daisyui'),

    ],
    daisyui: {
        themes: false, // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "light", // name of one of the included themes for dark mode
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adFds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
        themeRoot: ":root", // The element that receives theme color CSS variables
    },

};
