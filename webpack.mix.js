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

mix.styles(
    'public/css/app.css', 
    'public/css/about.css', 
    'public/css/base.css', 
    'public/css/common.css',
    'public/css/nav.css',
    'public/css/style.css',
    'public/css/work_content.css',
    'public/css/works.css')

    if (mix.inProduction()) {
        mix.version();
      }