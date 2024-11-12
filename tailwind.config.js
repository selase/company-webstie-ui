import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            zIndex: {
                60: "60",
                70: "70",
                80: "80",
                90: "90",
                100: "100",
            },
            backgroundImage: {
                "custom-image": "url('/public/images/laptop.jpg')",
                "community-image": "url('/public/images/adeva_our_vision.jpg')",
                "AI-image":
                    "url(/public/images/665a68d0fb4baf76b83a5923_AI-tools-IT-services-InteriorHero-tiny-p-500.png)",
                "ai-main-image":
                    "url('/public/images/66324c7108030f158eedcad7_Vector.avif')",
            },
            boxShadow: {
                even: "0 0 10px rgba(0, 0, 0, 0.15)", // Modify as needed
            },
        },
    },
    plugins: [],
};
