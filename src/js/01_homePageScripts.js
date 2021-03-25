// Preloader

$(function() {
  $('#preload-homepage').click(function() {
    $(this)
      .fadeOut('3000')
      .remove();
  });
  if (!sessionStorage.getItem('homePagePreloader')) {
    sessionStorage.setItem('homePagePreloader', true);
    $('#preload-homepage').css('display', 'block');
    setTimeout(function() {
      $('#preload-homepage').fadeOut();
    }, 3000);
    setTimeout(function() {
      $('#preload-homepage').remove();
    }, 3500);
  } else {
    $('#preload-homepage').css('display', 'none');
  }
});


