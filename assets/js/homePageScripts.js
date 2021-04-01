/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/01_homePageScripts.js":
/*!**************************************!*\
  !*** ./src/js/01_homePageScripts.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Preloader
$(function () {
  $('#preload-homepage').click(function () {
    $(this).fadeOut('3000').remove();
  });

  if (!sessionStorage.getItem('homePagePreloader')) {
    // sessionStorage.setItem('homePagePreloader', true);
    $('#preload-homepage').css('opacity', '1');
    $('#preload-homepage').addClass('is-desktop');
    setTimeout(function () {
      var c = document.getElementById('loader-txt-wrap').children;
      c[1].innerHTML = '6';
      c[1].classList.add('fade-up');
      setTimeout(function () {
        c[4].innerHTML = '8';
        c[4].classList.add('fade-up');
        setTimeout(function () {
          c[7].innerHTML = '5';
          c[7].classList.add('fade-up');
          setTimeout(function () {
            c[2].innerHTML = '7';
            c[2].classList.add('fade-up');
            setTimeout(function () {
              c[5].innerHTML = '1';
              c[5].classList.add('fade-up');
            }, 500);
          }, 500);
        }, 500);
      }, 500);
    }, 2000);
    setTimeout(function () {
      $('#preload-homepage').removeClass('is-desktop');
      $('#preload-homepage').addClass('preload-end');
      setTimeout(function () {
        $('#preload-homepage').css('display', 'none');
      }, 1000);
    }, 4000);
  } else {
    $('#preload-homepage').css('display', 'none');
  }
});

/***/ }),

/***/ "./src/js/global.js":
/*!**************************!*\
  !*** ./src/js/global.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  //Back to top
  $('#top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 'slow', 'easeInOutQuint');
  }); //Projects style

  $('nav div').click(function () {
    window.scrollTo(0, 0);
    var style = $(this).attr('id');

    if (style != 'scroll') {
      $('body').removeClass('scroll-active');
    }

    $('nav div').removeClass();
    $(this).addClass('active');
    $('main').removeClass().addClass(style);
    $('main').find('.trigger').next().slideUp('slow', 'easeInOutQuint');
    $('main .trigger').removeClass('active');
  }); //Cookies Views

  $('#covers').click(function () {
    Cookies.remove('Grid');
    Cookies.remove('List');
    Cookies.set('Covers', '1');
  });
  $('#grid').click(function () {
    Cookies.remove('Covers');
    Cookies.remove('List');
    Cookies.set('Grid', '1');
  });
  $('#list').click(function () {
    Cookies.remove('Covers');
    Cookies.remove('Grid');
    Cookies.set('List', '1');
  });

  if (Cookies.get('Covers')) {
    $('#covers').addClass('active');
    $('main').removeClass().addClass('covers');
  } else if (Cookies.get('Grid')) {
    $('#grid').addClass('active');
    $('main').removeClass().addClass('grid');
  } else if (Cookies.get('List')) {
    $('#list').addClass('active');
    $('main').removeClass().addClass('list');
  }
});

/***/ }),

/***/ "./src/scss/index.scss":
/*!*****************************!*\
  !*** ./src/scss/index.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************************************!*\
  !*** multi ./src/js/01_homePageScripts.js ./src/js/global.js ./src/scss/index.scss ***!
  \*************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/shady/Desktop/fffcorp21/src/js/01_homePageScripts.js */"./src/js/01_homePageScripts.js");
__webpack_require__(/*! /Users/shady/Desktop/fffcorp21/src/js/global.js */"./src/js/global.js");
module.exports = __webpack_require__(/*! /Users/shady/Desktop/fffcorp21/src/scss/index.scss */"./src/scss/index.scss");


/***/ })

/******/ });