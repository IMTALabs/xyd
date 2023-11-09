const plugin = require('tailwindcss/plugin')

// Rotate X utilities
const rotateX = plugin(function ({addUtilities}) {
    addUtilities({
        '.rotate-x-20': {
            transform: 'rotateX(20deg)',
        },
        '.rotate-x-40': {
            transform: 'rotateX(40deg)',
        },
        '.rotate-x-60': {
            transform: 'rotateX(60deg)',
        },
        '.rotate-x-80': {
            transform: 'rotateX(80deg)',
        },
        '.rotate-x-180': {
            transform: 'rotateX(180deg)',
        },
    })
});

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#6a3c18",
                secondary: "#fef9db",
            },
        },
    },
    plugins: [
        rotateX,
    ],
}
