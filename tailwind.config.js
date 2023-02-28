const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        
        // elements
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",

        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Josefin Sans', ...defaultTheme.fontFamily.sans],
            }
        },
    },

    plugins: 
    [
        require('@tailwindcss/forms'),
        require('tw-elements/dist/plugin'),
        require('flowbite/plugin')
    ],
    darkMode: 'media',

};
