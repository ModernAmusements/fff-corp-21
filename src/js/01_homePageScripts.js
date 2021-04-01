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
  } else {
    $('#preload-homepage').css('display', 'none');
  }
});


