import forms from '@tailwindcss/forms';
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                rubik: ['Rubik', 'sans-serif'],
                inter: ['Inter', 'sans-serif'],
            },
            colors: {
                "dsl-blue": "#1500B2",
                "dsl-secondary": "#F4F4F4"
            },
            transitionDuration: {
                3000: '3000ms',
            },
        },
    },

    plugins: [forms],
};
