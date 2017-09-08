/**
 * Created by Abdul-Wahab on 5/22/2017.
 */

const { mix } = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js1')
    .sass('resources/assets/sass/app.scss', 'public/css');

/* Optional: uncomment for bootstrap fonts */
// mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');