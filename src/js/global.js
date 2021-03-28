$(document).ready(function() {

  //Back to top
  $('#top').click(function() {

      $('html, body').animate(
        {
          scrollTop: 0,
        },
        'slow',
        'easeInOutQuint',
      );
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
});
