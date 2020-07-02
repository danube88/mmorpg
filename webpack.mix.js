const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/flag-icon-css/css/flag-icon.min.css', 'public/css/flag-icon.min.css');

mix.copy('node_modules/flag-icon-css/flags/4x3/ru.svg', 'public/flags/4x3/ru.svg');
mix.copy('node_modules/flag-icon-css/flags/4x3/ua.svg', 'public/flags/4x3/uk.svg');
mix.copy('node_modules/flag-icon-css/flags/4x3/us.svg', 'public/flags/4x3/en.svg');
