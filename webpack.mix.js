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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.styles([
    'resources/theme/css/bootstrap.min.css',
    'resources/theme/css/font-awesome.min.css',
    'resources/theme/css/owl.carousel.min.css',
    'resources/theme/css/animate.min.css',
    'resources/theme/css/flaticon.css',
    'resources/theme/css/validator.min.css',
    'resources/theme/colors/dark-green.css',
    'resources/theme/css/style.css'
], 'public/css/theme.css');

mix.scripts([
    'resources/theme/js/jquery.min.js',
    'resources/theme/js/bootstrap.min.js',
    'resources/theme/js/owl.carousel.min.js',
    'resources/theme/js/jquery.appear.js',
    'resources/theme/js/jquery.easing.min.js',
    'resources/theme/js/jquery.stellar.min.js',
    'resources/theme/js/jquery.counterup.min.js',
    'resources/theme/js/isotope.pkgd.min.js',
    'resources/theme/js/lightbox.min.js',
    'resources/theme/js/jquery.mb.YTPlayer.min.js',
    'resources/theme/js/validator.min.js',
    'resources/theme/js/theme.js',
], 'public/js/theme.js');
