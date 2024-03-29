// jshint ignore: start
/* eslint-disable */
let mix = require("laravel-mix")
mix.setPublicPath("assets")

mix.js([
  'src/js/01_homePageScripts.js',
  'src/js/global.js',
  ], 'assets/js/homePageScripts.js');

mix.js([
    'src/js/02_swiper.min.js',
    'src/js/03_darkmode.js',
    'src/js/04_intersectionObserver.js',
    'src/js/06_mobile-nav.js',
    'src/js/07_modal.js',
    'src/js/09_plugins.js',
    'src/js/current-device-browser.min',
    'src/js/11_cookieConsent.js',
    'src/js/cursor.js',
    ], 'assets/js/main.js');

mix.sass('src/scss/index.scss', 'assets/css');

mix.browserSync('http://fff-corp-21.test/');


if (mix.inProduction()) {
  mix.version()
     .sourceMaps();
}
