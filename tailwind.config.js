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
                "analytical-image": "url(/public/images/analytical-image.jpg)",
                "ai-main-image":
                    "url('/public/images/66324c7108030f158eedcad7_Vector.avif')",
                "svg-bg-image":
                    "url('/public/images/6642d65792364637525a75fb_unparalleled-bg-1.svg')",
            },
            boxShadow: {
                even: "0 0 10px rgba(0, 0, 0, 0.15)", // Modify as needed
            },
        },
    },
    plugins: [],
};
