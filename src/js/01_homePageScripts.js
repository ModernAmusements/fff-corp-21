$(function() {
  $(window).scrollTop();

  var preloader = $("#preload-homepage");
  var menu = $(".menu-animation");
  var covers = $(".cover-animation");
  var nav = $(".desktop-nav");
  var header = $("header");
  var logo = $(".home-logo");
  var darkmode = $(".toggle-animation");

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
      darkmode.addClass('fade-up'),
      logo.addClass('page-title-animation');
    }, 3000);

  } else {
    preloader.css('display', 'none');
    menu.addClass('fade-up'),
    covers.addClass('fade-up'),
    darkmode.addClass('fade-up'),
    logo.addClass('page-title-animation');
  }

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (window.innerWidth > 460) {
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
        };
      }

  if (window.innerWidth < 460) {
    if (scroll >= 1) {
      if(!nav.hasClass("scroll-nav")) {
        logo.removeClass('large').addClass("scroll-active"),
        nav.removeClass('lrg-nav'),
        header.css({"height": "100px", "transition": "height 1s cubic-bezier(0.39, 0.575, 0.565, 1)"});
      }
    } else {
      if(!nav.hasClass("lrg-nav")) {
        logo.removeClass("scroll-active").addClass('large'),
        nav.removeClass("scroll-nav"),
        header.css({"height": "100vh", "transition": "height 1s cubic-bezier(0.39, 0.575, 0.565, 1)"});
      }
    }
  }
    });
});









