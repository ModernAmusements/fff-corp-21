// Preloader

$(function() {
  $('#preload-homepage').click(function() {
    $(this)
      .fadeOut('3000')
      .remove();
  });
  if (!sessionStorage.getItem('homePagePreloader')) {
    // sessionStorage.setItem('homePagePreloader', true);
    $('#preload-homepage').css('opacity', '1');
    $('#preload-homepage').addClass('is-desktop');
    setTimeout(() => {
      var c = document.getElementById('loader-txt-wrap').children;
      c[1].innerHTML = '6';
      c[1].classList.add('fade-up');
      setTimeout(() => {
        c[4].innerHTML = '8';
        c[4].classList.add('fade-up');
        setTimeout(() => {
          c[7].innerHTML = '5';
          c[7].classList.add('fade-up');
          setTimeout(() => {
            c[2].innerHTML = '7';
            c[2].classList.add('fade-up');
            setTimeout(() => {
              c[5].innerHTML = '1';
              c[5].classList.add('fade-up');
            }, 500);
          }, 500);
        }, 500);
      }, 500);
    }, 2000);
    setTimeout(() => {
      $('#preload-homepage').removeClass('is-desktop');
      $('#preload-homepage').addClass('preload-end');
      setTimeout(() => {
      $('#preload-homepage').css('display', 'none');
    }, 1000);
  }, 4000);
  } else {
    $('#preload-homepage').css('display', 'none');
  }
});
