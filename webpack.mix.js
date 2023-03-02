let mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .sass('resources/scss/main.scss', 'public/css')
    .sass('resources/scss/tailwind.scss', 'public/css')
    .options({
        processCssUrls: true,
        postCss: [
            require('autoprefixer'),
            require('tailwindcss'),
        ]
    })
    .copyDirectory('resources/images', 'public/images')