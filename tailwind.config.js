const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '112': '28rem',
                '128': '32rem',
              },
              flexBasis: {
                '1/7': '14.2857143%',
                '2/7': '28.5714286%',
                '3/7': '42.8571429%',
                '4/7': '57.1428571%',
                '5/7': '71.4285714%',
                '6/7': '85.7142857%',
              }
        },
        container: {
            center: true,
            padding: {
              DEFAULT: '0rem',
              sm: '0rem',
              lg: '4rem',
              xl: '5rem',
              '2xl': '6rem',
            },
            
          },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tw-elements/dist/plugin'),
        require('flowbite/plugin')
    ],
};
