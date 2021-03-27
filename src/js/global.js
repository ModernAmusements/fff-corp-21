$(document).ready(function() {
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    //Hide Tagline on devices
    var taglineT = setTimeout(function() {
      $('#tagline').fadeOut(function() {
        $(this).remove();
      });
    }, 5000);
    $('#tagline').click(function() {
      clearTimeout(taglineT);
      $(this).fadeOut(function() {
        $(this).remove();
      });
    });
    //Pause autoplay videos on devices
    $('.module-full-width video').removeAttr('autoplay');
    $('.module-two-columns video').removeAttr('autoplay');
  } else {
    $('.page-index .thumbnail video').removeAttr('autoplay');
    $('#related video').removeAttr('autoplay');
    //Play Videos on hover
    $('video:not([autoplay])').hover(
      function() {
        $(this)[0].play();
      },
      function() {
        $(this)[0].pause();
      },
    );
    //Hide Tagline on desktop
    $(window).scroll(function() {
      var h = $('#tagline').outerHeight();
      if ($(window).scrollTop() == 0) {
        var timerT = setTimeout(function() {
          $('#tagline').slideDown('slow', 'easeInOutQuint');
        }, 500);
      } else if ($(window).scrollTop() > h) {
        clearTimeout(timerT);
        $('#tagline').slideUp('slow', 'easeInOutQuint');
      }
    });
  }

  //Hide Tagline if anchor to Header
  // $(function(){
  //      if (document.location.href.indexOf('#header') > -1 ){
  //           $('#tagline').remove();
  //      }
  // });

  //Back to top
  $('#top').click(function() {
    if ($('main').hasClass('scroll')) {
      $('#scroll-wrapper').animate(
        {
          scrollTop: 0,
        },
        'slow',
        'easeInOutQuint',
      );
    } else {
      $('html, body').animate(
        {
          scrollTop: 0,
        },
        'slow',
        'easeInOutQuint',
      );
    }
  });

  //Projects style
  $('nav div').click(function() {
    window.scrollTo(0, 0);
    var style = $(this).attr('id');
    if (style != 'scroll') {
      $('body').removeClass('scroll-active');
    }
    $('nav div').removeClass();
    $(this).addClass('active');
    $('main')
      .removeClass()
      .addClass(style);
    $('main')
      .find('.trigger')
      .next()
      .slideUp('slow', 'easeInOutQuint');
    $('main .trigger').removeClass('active');
  });

  // //Cookies Views

  // $('#covers').click(function() {
  //     Cookies.remove('Grid');
  //     Cookies.remove('List');
  //     Cookies.set('Covers', '1');
  // });

  // $('#grid').click(function() {
  //     Cookies.remove('Covers');
  //     Cookies.remove('List');
  //     Cookies.set('Grid', '1');
  // });

  // $('#list').click(function() {
  //     Cookies.remove('Covers');
  //     Cookies.remove('Grid');
  //     Cookies.set('List', '1');
  // });

  // if (Cookies.get('Covers')) {
  //     $('nav div').removeClass();
  //     $('#covers').addClass('active');
  //     $('main').removeClass().addClass('covers');

  // } else if (Cookies.get('Grid')) {
  //     $('nav div').removeClass();
  //     $('#grid').addClass('active');
  //     $('main').removeClass().addClass('grid');

  // } else if (Cookies.get('List')) {
  //     $('nav div').removeClass();
  //     $('#list').addClass('active');
  //     $('main').removeClass().addClass('list');
  // }

  //Cookies Views


  $('#covers').click(function() {
    Cookies.remove('Grid');
    Cookies.remove('List');
    Cookies.set('Covers', '1');
  });

  $('#grid').click(function() {
    Cookies.remove('Covers');
    Cookies.remove('List');
    Cookies.set('Grid', '1');
  });

  $('#list').click(function() {
    Cookies.remove('Covers');
    Cookies.remove('Grid');
    Cookies.set('List', '1');
  });

  if (Cookies.get('Covers')) {
    $('#covers').addClass('active');
    $('main')
      .removeClass()
      .addClass('covers');
  } else if (Cookies.get('Grid')) {
    $('#grid').addClass('active');
    $('main')
      .removeClass()
      .addClass('grid');
  } else if (Cookies.get('List')) {
    $('#list').addClass('active');
    $('main')
      .removeClass()
      .addClass('list');
  }

  //Display menu
  if ($(window).width() > 600) {
    $('menu .trigger:first-of-type')
      .next()
      .show();
  } else {
    $('.trigger').removeClass('active');
  }
  $('.trigger').click(function() {
    var target = $(this);
    var triggers = $(this)
      .parent()
      .parent()
      .find('.trigger');
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
  });
});

//Lazy Loading for images
document.addEventListener('DOMContentLoaded', function() {
  const imageObserver = new IntersectionObserver((entries, imgObserver) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const lazyImage = entry.target;
        lazyImage.src = lazyImage.dataset.src;
      }
    });
  });
  const arr = document.querySelectorAll('img.lazy');
  arr.forEach(v => {
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
