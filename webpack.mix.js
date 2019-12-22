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

// Customer style sheet
mix.styles([
    'public/customer/content/css/header.css',
], 'public/customer/content/style.css');

mix.scripts([
    'public/customer/content/vendor/jquery/jquery.min.js',
], 'public/customer/content/script.js');
