$(function() {
  smoothScroll(1000);
});

// smoothScroll function is applied from the document ready function
function smoothScroll (duration) {
  $('a[href^="#"]').on('click', function(event) {

      var target = $( $(this).attr('href') );
      $("#nav-wrap a").css('font-weight','normal')
      $(this).css('text-decoration','underline yellow')
      if( target.length ) {
          event.preventDefault();
          $('html, body').animate({
              scrollTop: target.offset().top
          }, duration);
      }
  });
}