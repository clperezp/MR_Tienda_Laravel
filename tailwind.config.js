const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            // Creamos una estructura de altura para la visualización de nuestro proyecto por pantalla
            height: {
                "10v": "10vh",
                "15v": "15vh",
                "65v": "65vh"
            },
            colors: {
                "header": "#E6621F",
                "nav": "#EDEDEE",
                "main": "#FFFFFF",
                "footer": "#898989"
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
