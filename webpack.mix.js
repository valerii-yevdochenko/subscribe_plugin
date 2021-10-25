const mix = require('laravel-mix');
const assert = require('assert');

mix.setPublicPath('./assets/build').browserSync('https://mentor.loc'); //Domain the current local project

mix.sass('assets/src/scss/main.scss', 'css');

mix.js('assets/src/js/main.js', 'js');