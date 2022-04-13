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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
mix.js('resources/js/DataTable---Fully-BSS-Editable.js', 'dist/');
mix.js('resources/js/Table-With-Search.js', 'dist/').sass('resources/sass/Table-With-Search.scss', 'dist/');
mix.sass('resources/sass/Black-Navbar.scss', 'dist/');
mix.sass('resources/sass/Competences-Grid---3-Columns---Hover-Effect-Float-Up.scss', 'dist/');
mix.sass('resources/sass/Navbar-With-Button.scss', 'dist/');
mix.sass('resources/sass/styles.scss', 'dist/');
mix.sass('resources/sass/Table-With-Search-1.scss', 'dist/');
mix.js('resources/js/Bootstrap-DataTables.js', 'dist/').sass('resources/sass/Bootstrap-DataTables.scss', 'dist/')
mix.copyDirectory('resources/fonts', 'public/fonts');
