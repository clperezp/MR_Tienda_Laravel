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
            height:{
                "15v":"15vh",
                "5v":"5vh",
                "70v":"70vh",
                "10v":"10vh",
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
