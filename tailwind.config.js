module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "gradient-white":
                    "linear-gradient(270deg, #EFF2FA 2.85%, #EFF2FA 2.86%, #F5F7FB 102.4%)",
                "rgradient-blue":
                    "radial-gradient(56.49% 353.68% at 52.15% 46.49%, #3188EF 0%, #2B88DE 0.01%, #123ABC 100%)",
            },
            fontFamily: {
                "dm-sans": "DM Sans, sans-serif",
                poppins: "Poppins, sans-serif",
            },
            colors: {
                accent: "#0087EF",
                primary: {
                    light: "#1D4ED8",
                    DEFAULT: "#123ABC",
                    dark: "#0E2C8D",
                },
                secondary: "#EE8C3B",
                greish: "#374151",
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
    ],
};
