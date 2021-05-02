$(function() {
  $(window).scrollTop();

  var preloader = $("#preload-homepage");
  var menu = $(".menu-animation");
  var covers = $(".cover-animation");
  var nav = $(".desktop-nav");
  var header = $("header");
  var logo = $(".home-logo");

  if (!sessionStorage.getItem('homePagePreloader')) {
     sessionStorage.setItem('homePagePreloader', true);
    preloader.css('opacity', '1').addClass('is-desktop');
      setTimeout(() => {
        preloader.removeClass('is-desktop').addClass('preload-end')
        setTimeout(() => {
          preloader.css('display', 'none');
      }, 1500);
    }, 2000);
    setTimeout(() => {
      menu.addClass('fade-up'),
      covers.addClass('fade-up'),
      logo.addClass('page-title-animation');
    }, 3000);

  } else {
    preloader.css('display', 'none');
    menu.addClass('fade-up'),
    covers.addClass('fade-up'),
    logo.addClass('page-title-animation');
  }

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
        if (scroll >= 75) {
          setTimeout(() => {
            if(!logo.hasClass("scroll-logo")) {
              logo.removeClass('large').addClass("scroll-active");
            }
          }, 150);
        } else {
          setTimeout(() => {
            if(!logo.hasClass("large")) {
              logo.removeClass("scroll-active").addClass('large');
            }
          }, 150);
        }
        if (window.innerWidth < 460) {
          if (scroll >= 75) {
            if(!nav.hasClass("scroll-nav")) {
              nav.removeClass('lrg-nav'),
              header.addClass("scroll-header");
            }
          } else {
            if(!nav.hasClass("lrg-nav")) {
              nav.removeClass("scroll-nav"),
              header.removeClass("scroll-header");;
            }
          }
        }
    });
});




// $('.home-logo').addClass('scroll-active')



