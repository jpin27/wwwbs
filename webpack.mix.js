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


/*
 |--------------------------------------------------------------------------
 | Bundle all the JavaScript files
 |--------------------------------------------------------------------------
 */

mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
	.copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js');

mix.copy('node_modules/jquery.easing/jquery.easing.min.js', 'public/js/jquery.easing.min.js')
	.copy('node_modules/scrollreveal/dist/scrollreveal.min.js', 'public/js/scrollreveal.min.js')
	.copy('node_modules/scrollspy-js/src/js/modules/scrollspy.js', 'public/js/scrollspy.js');

mix.copy('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js', 'public/js/bootstrap-datepicker.min.js')
	.copy('node_modules/magnific-popup/dist/jquery.magnific-popup.min.js', 'public/js/jquery.magnific-popup.min.js');

mix.js('resources/assets/js/creative.js', 'public/js');


/*
 |--------------------------------------------------------------------------
 | Include the CSS files
 |--------------------------------------------------------------------------
 */

/* Copy CSS files from node_modules */

mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');

/* Compile Sass and Less files into CSS */

mix.sass('resources/assets/sass/creative.scss', 'public/css')
   	.sass('resources/assets/sass/magnific-popup/magnific-popup.scss', 'public/css');
mix.less('resources/assets/less/bootstrap-datepicker.less', 'public/css');


/*
 |--------------------------------------------------------------------------
 | Miscellaneous shit. In this case, copy the images folder
 |--------------------------------------------------------------------------
 */

mix.copyDirectory('resources/assets/img', 'public/img');
