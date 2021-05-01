$(function() {
  var preloader = $("#preload-homepage");
  var menu = $(".menu-animation");
  var covers = $(".cover-animation");
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
        if (scroll >= 50) {
          setTimeout(() => {
            if(!logo.hasClass("scroll-logo")) {
              logo.removeClass('lrg-logo').addClass("scroll-active"),
              logo.removeClass('page-title-animation');
            }
          }, 150);
        } else {
          setTimeout(() => {
            if(!logo.hasClass("lrg-logo")) {
              logo.removeClass("scroll-active").addClass('lrg-logo'),
              logo.addClass('page-title-animation');
            }
          }, 150);

        }
    });
});




// $('.home-logo').addClass('scroll-active')



