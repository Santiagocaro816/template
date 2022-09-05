const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/coreui/css/simplebar.css',
    'resources/coreui/css/simplebar-2.css',
    'resources/coreui/css/style.css',
],'public/css/app.css').scripts([
    'resources/coreui/js/bundle.min.js',
    'resources/coreui/js/simplebar.min.js',
],'public/js/app.js');
