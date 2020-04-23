const mix = require('laravel-mix');


// const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin');
//
// const CaseSensitivePathsPlugin = require('case-sensitive-paths-webpack-plugin');
//
// var webpackConfig = {
//     plugins: [
//         new CaseSensitivePathsPlugin(),
//         new VuetifyLoaderPlugin()
//         // other plugins ...
//     ]
//     // other webpack config ...
// };
//
// mix.webpackConfig( webpackConfig );

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
   .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'node_modules/venobox/venobox/venobox.min.js',
    'node_modules/swiper/js/swiper.js',
    // 'node_modules/feather-icons/dist/feather.js',
    'node_modules/bootstrap-dropdown-hover/dist/jquery.bootstrap-dropdown-hover.min.js',
    // 'node_modules/vue-multiselect/dist/vue-multiselect.min.js',
], 'public/js/plugins.js');
// ---js web
if (mix.config.inProduction) {
    mix.version();
}
