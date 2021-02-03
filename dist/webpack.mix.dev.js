"use strict";

var mix = require('laravel-mix');
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


mix // .sass('resources/views/scss/style.scss', 'public/site/style.css')
.copy('resources/assets/img', 'public/assets/img').sass('resources/assets/sass/app.scss', 'public/assets/css/app.css').scripts('resources/js/app.js', 'public/assets/js');