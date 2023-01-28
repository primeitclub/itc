module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "rgradient-blue":
                    "radial-gradient(56.49% 353.68% at 52.15% 46.49%, #3188EF 0%, #2B88DE 0.01%, #123ABC 100%)",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
