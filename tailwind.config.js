/** @type {import('tailwindcss').Config} */

import preset from "./vendor/filament/support/tailwind.config.preset";

const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    presets: [preset],

    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require("@tailwindcss/aspect-ratio")],
};
