const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            // MoE Branding Colors
            transparent: 'transparent',
            current: 'currentColor',
            gray: '#4D4D4D',
            red: '#D1503E',
            blue: '#2048A1',
            sky: '#3C8FC3',
            yellow: '#F8BE13',
            dark: '#191919',
            light: '#CCCCCC',
            white: '#F9F9F9',
        },

        extend: {
            fontFamily: {
                gotham: "'Gotham', 'sans serif'",
                noto: "'Noto', 'sans serif'",
            },

            boxShadow: {
                sm: '0px 2px 4px 0px rgb(11, .10, .55, 0.0444)',
                md: '0px 4px 12px 0px rgb(14, .13, .77, 0.0555)',
                lg: '0px 8px 20px 0px rgb(18, .16, .99, 0.0666)',
            },

            keyframes: {
                life: {
                    "0%": { width: "100%" },
                    "100%": { width: "0%" },
                },
            },
            animation: {
                life: "life 4750ms linear forwards",
            },

            backgroundImage: (theme) => ({
                'image-one': "url('/public/Logo.png')",
                'image-two': "url('https://moe.gov.et/fotlogo.png')",
            }),
        },
    },

    variants: {
        extend: {
            backgroundImage: ['dark'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};