const mix = require('laravel-mix');

// require('laravel-mix-tailwind');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/vue.js', 'public/scripts')
    .postCss('resources/sass/tailwind.css', 'public/styles/tailwind.css', [
            require('postcss-import'),
            require('tailwindcss'),
    ]);
    // .sass('resources/sass/tailwind.scss', 'public/styles')
    // // .sass('resources/sass/hamburgers/hamburgers.scss', 'public/styles')
    // .tailwind();
