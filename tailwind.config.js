const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
               'birubut': '#2f5a8d',
               'birumud': '#8cbabe',
               'putihmud': '#fefaf6',
               'birutext': '#5788a8',
             }
           },
           fontFamily: {
            'poppins': ['Poppins'],
            'nunito': ['Nunito'],
            'quicksand': ['Quicksand'],
         },
    },

    plugins: [require('@tailwindcss/forms')],
};
