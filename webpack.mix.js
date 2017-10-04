let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
        'resources/assets/css/bootstrap.css',
        'resources/assets/css/bootstrap-theme.css',
        'resources/assets/css/ionicons.css',
        'resources/assets/css/library-imports.css',
        'resources/assets/css/main.css',
        'resources/assets/css/main-responsive.css'

            ], 'public/css/template.css');


mix.scripts([

		'resources/assets/js/template/jquery-2.1.4.min.js',
		'resources/assets/js/template/library-imports.js',
        'resources/assets/js/template/jquery.easing.1.3.js',
        'resources/assets/js/template/jquery.lavalamp-1.4.js',
        
        
        'resources/assets/js/template/main.js',
        'resources/assets/js/jssor/jssor.slider-26.2.0.min.js',
            ], 'public/js/template.js');