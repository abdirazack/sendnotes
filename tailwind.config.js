import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],

    theme: {
        extend: {
            colors: {
                accent: {
                  1: "hsl(var(--color-accent1) / <alpha-value>)",
                  2: "hsl(var(--color-accent2) / <alpha-value>)",
                },
                bkg: "hsl(var(--color-bkg) / <alpha-value>)",
                content: "hsl(var(--color-content) / <alpha-value>)",
              },
              animation: {
                "spin-slower": "spin 35s ease infinite",
                "spin-slow": "spin 25s ease-in-out infinite reverse",
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },


        },
    },

    plugins: [forms],
};
