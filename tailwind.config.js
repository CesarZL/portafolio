import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'sans': ['Inter','sans-serif'],
            },
        },
    },

    
    // require('@tailwindcss/typography'),

    // plugins: [forms],
    plugins: 
    [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
