const mix = require('laravel-mix');
mix.webpackConfig({ module: { rules: [ { test: /\.scss$/, loader: 'import-glob-loader' }, ] } });
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

mix.sass('resources/scss/style.scss','public/css/style.min.css');
