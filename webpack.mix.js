// Mix provides several features to help
// you work with your JavaScript files, such
// as compiling modern ECMAScript, module bundling,
// minification, and concatenating plain JavaScript files.
// Even better, this all works seamlessly,
// without requiring an ounce of custom configuration:

// jshint ignore: start
/* eslint-disable */
const mix = require('laravel-mix');

mix.js([
  'src/js/01_homePageScripts.js',
  ], 'assets/js/homePageScripts.js');

mix.js([
    'src/js/02_swiper.min.js',
    'src/js/03_darkmode.js',
    'src/js/04_intersectionObserver.js',
    'src/js/06_mobile-nav.js',
    'src/js/07_modal.js',
    'src/js/09_plugins.js',
    'src/js/10_current-device.min.js',
    'src/js/11_cookieConsent.js'
    ], 'assets/js/main.js');

mix.sass('src/scss/index.scss', 'assets/css');

// mix.browserSync('http://modernamusment.test/');
