$(function() {
  var logo = $(".home-logo");
  var layout = $("#wrapper");

  $(window).scroll(function() {
  var scroll = $(window).scrollTop();

      if (scroll >= 25) {
        if(!logo.hasClass("scroll-logo")) {
          logo.removeClass('lrg-logo').addClass("scroll-logo").fadeIn("slow");
          layout.addClass("scroll-layout").fadeIn("slow")
        }
      } else {
        if(!logo.hasClass("lrg-logo")) {
          logo.removeClass("scroll-logo").addClass('lrg-logo').fadeIn("slow");
          layout.removeClass("scroll-layout").fadeIn("slow")
        }
      }

  });
});

$(function() {
  var nav = $(".desktop-nav"); $(window).scroll(function() {
  var header = $("header")
  var scroll = $(window).scrollTop();
      if (window.innerWidth < 460) {

      if (scroll >= 25) {
        if(!nav.hasClass("scroll-nav")) {
          nav.removeClass('lrg-nav').addClass("scroll-nav").fadeIn("slow"),
          header.addClass("scroll-header");
        }
      } else {
        if(!nav.hasClass("lrg-nav")) {
          nav.removeClass("scroll-nav").addClass('lrg-nav').fadeIn("slow"),
          header.removeClass("scroll-header");;
        }
      }
    }

  });


});




