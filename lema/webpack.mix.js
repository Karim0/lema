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

mix.js('resources/js/app.js', 'public/js')
    // .js('resources/js/myJS.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/awesome/font-awesome.css', 'public/css/awesome')
    .postCss('resources/css/awesome/font-awesome.min.css', 'public/css/awesome')
    .less('resources/css/style.less', 'public/css')
    .copy('resources/img', 'public/img');
