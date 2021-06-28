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

mix
    //Bootstrap & jQuery
    .scripts(['node_modules/jquery/dist/jquery.js','node_modules/bootstrap/dist/js/bootstrap.js'],'public/site/js/scripts.js')
    .sass('resources/views/home/scss/bootstrap.scss','public/site/css/style.css')

    .version();