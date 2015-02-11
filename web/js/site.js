var dropdowns = $('.dropdown');
dropdowns.click(function() {
  if ( $(this).hasClass('active') ){
    $(this).toggleClass('active');
  } else {
    dropdowns.removeClass('active');
    $(this).toggleClass('active');
  }
});