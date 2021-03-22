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
    sessionStorage.setItem('homePagePreloader', true);
    $('#preload-homepage').css('display', 'block');
    setTimeout(function () {
      $('#preload-homepage').fadeOut();
    }, 3000);
    setTimeout(function () {
      $('#preload-homepage').remove();
    }, 3500);
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

/*
 * General Scripts
 */
$(document).ready(function () {
  //Tagline Cookie
  // if(Cookies.get('Tagline')){
  //      $('#tagline').remove();
  // }else{
  //      Cookies.set('Tagline', '1');
  // }
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    //Hide Tagline on devices
    var taglineT = setTimeout(function () {
      $('#tagline').fadeOut(function () {
        $(this).remove();
      });
    }, 5000);
    $('#tagline').click(function () {
      clearTimeout(taglineT);
      $(this).fadeOut(function () {
        $(this).remove();
      });
    }); //Pause autoplay videos on devices

    $('.module-full-width video').removeAttr('autoplay');
    $('.module-two-columns video').removeAttr('autoplay');
  } else {
    $('.page-index .thumbnail video').removeAttr('autoplay');
    $('#related video').removeAttr('autoplay'); //Play Videos on hover

    $('video:not([autoplay])').hover(function () {
      $(this)[0].play();
    }, function () {
      $(this)[0].pause();
    }); //Hide Tagline on desktop

    $(window).scroll(function () {
      var h = $('#tagline').outerHeight();

      if ($(window).scrollTop() == 0) {
        var timerT = setTimeout(function () {
          $('#tagline').slideDown('slow', 'easeInOutQuint');
        }, 500);
      } else if ($(window).scrollTop() > h) {
        clearTimeout(timerT);
        $('#tagline').slideUp('slow', 'easeInOutQuint');
      }
    });
  } //Hide Tagline if anchor to Header
  // $(function(){
  //      if (document.location.href.indexOf('#header') > -1 ){
  //           $('#tagline').remove();
  //      }
  // });
  //Back to top


  $('#top').click(function () {
    if ($('main').hasClass('scroll')) {
      $('#scroll-wrapper').animate({
        scrollTop: 0
      }, 'slow', 'easeInOutQuint');
    } else {
      $('html, body').animate({
        scrollTop: 0
      }, 'slow', 'easeInOutQuint');
    }
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
    Cookies.remove('Scroll');
    Cookies.set('Covers', '1');
  });
  $('#grid').click(function () {
    Cookies.remove('Covers');
    Cookies.remove('List');
    Cookies.remove('Scroll');
    Cookies.set('Grid', '1');
  });
  $('#list').click(function () {
    Cookies.remove('Covers');
    Cookies.remove('Grid');
    Cookies.remove('Scroll');
    Cookies.set('List', '1');
  });
  $('#scroll').click(function () {
    $('body').addClass('scroll-active');
    $('#scroll-wrapper').scrollTop(0);
    $('main.scroll .project:first-child .thumbnail').css('width', '100%');
    Cookies.remove('Covers');
    Cookies.remove('Grid');
    Cookies.remove('List');
    Cookies.set('Scroll', '1');

    if ($('#search-tags').hasClass('active')) {
      $('#search-tags').removeClass('active');
      $('#search-tags').next().slideUp('slow', 'easeInOutQuint');
    }
  });

  if (Cookies.get('Covers')) {
    $('nav div').removeClass();
    $('#covers').addClass('active');
    $('main').removeClass().addClass('covers');
  } else if (Cookies.get('Grid')) {
    $('nav div').removeClass();
    $('#grid').addClass('active');
    $('main').removeClass().addClass('grid');
  } else if (Cookies.get('List')) {
    $('nav div').removeClass();
    $('#list').addClass('active');
    $('main').removeClass().addClass('list');
  } else if (Cookies.get('Scroll')) {
    $('body').addClass('scroll-active');
    $('nav div').removeClass();
    $('#scroll').addClass('active');
    $('main').removeClass().addClass('scroll');
  } //Project images


  $('.desktop main .trigger').each(function (index) {
    var target = $(this);
    var video = target.prev('.thumbnail').find('video');
    var timer;
    target.on('mouseleave', function (e) {
      if (video.length) {
        video[0].pause();
      }

      timer = setTimeout(function () {
        target.prev('.thumbnail').fadeOut();
      }, 250);
    });
    target.on('mousemove', function (e) {
      clearTimeout(timer);

      if (video.length) {
        video[0].play();
      }

      target.prev('.thumbnail').show().css({
        left: e.pageX
      });
    });
  }); //Display menu

  if ($(window).width() > 600) {
    $('menu .trigger:first-of-type').next().show();
  } else {
    $('.trigger').removeClass('active');
  }

  $('.trigger').click(function () {
    var target = $(this);
    var triggers = $(this).parent().parent().find('.trigger');

    if (triggers.hasClass('active') && !target.hasClass('active')) {
      triggers.removeClass('active');
      target.addClass('active');
      triggers.next().slideUp('slow', 'easeInOutQuint');
      target.next().slideDown('slow', 'easeInOutQuint');
    } else if (target.hasClass('active')) {
      target.removeClass('active');
      target.next().slideUp('slow', 'easeInOutQuint');
    } else {
      target.addClass('active');
      target.next().slideDown('slow', 'easeInOutQuint');
    }
  }); //Close Filters

  $('menu .trigger, #scroll').click(function () {
    var filters = $('#filters').children().length;

    if (filters > 0) {
      $('main').removeClass('filter-active');
      $('#filters').slideUp('slow', 'easeInOutQuint', function () {
        $('.tag').removeClass('active');
        $('.project').removeClass('filter-active');
        $('#filters span').remove();
      });
    }
  }); //Filter functions

  $('.tag').click(function () {
    var value = $(this).children('span:first-of-type').text();
    var slug = $(this).children('span:first-of-type').attr('id');
    var filters = $('#filters').children().length; // $('.project').hide().filter(slug).show();

    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.project.' + slug).removeClass('filter-active');

      if (filters == 1) {
        $('main').removeClass('filter-active');
        $('.project').removeClass('filter-active');
        $('#filters').slideUp('slow', 'easeInOutQuint', function () {
          $('#filter' + slug).remove();
        });
      } else {
        $('#filter' + slug).remove();
      }
    } else {
      $(this).addClass('active');
      $('.project.' + slug).addClass('filter-active');

      if (filters == 0) {
        $('main').addClass('filter-active');
        $('#filters').append('<span id="filter' + slug + '">' + value + '</span>');
        $('#filters').slideDown('slow', 'easeInOutQuint');
      } else {
        $('#filters').append('<span id="filter' + slug + '">' + value + '</span>');
      }
    }
  });
}); //Lazy Loading for images

document.addEventListener("DOMContentLoaded", function () {
  var imageObserver = new IntersectionObserver(function (entries, imgObserver) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var lazyImage = entry.target;
        lazyImage.src = lazyImage.dataset.src;
      }
    });
  });
  var arr = document.querySelectorAll('img.lazy');
  arr.forEach(function (v) {
    imageObserver.observe(v);
  });
});
/*
window.addEventListener('load', function() {
    var video = document.querySelector('#video');
    var preloader = document.querySelector('.preloader');
    function checkLoad() {
        if (video.readyState === 4) {
            preloader.parentNode.removeChild(preloader);
        } else {
            setTimeout(checkLoad, 100);
        }
    }
    checkLoad();
}, false);*/

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