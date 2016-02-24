(function() {
  $(document).ready(function() {
    var $window, distance, navbar;
    $('[data-toggle=\'popover\']').each(function(index, element) {
      var contentElementId, contentHtml;
      contentElementId = $(element).data().target;
      contentHtml = $(contentElementId).html();
      $(element).popover({
        content: contentHtml,
        'trigger': 'hover',
        'html': true,
        'placement': 'bottom'
      });
    });
    $('.scroll').click(function(event) {
      event.preventDefault();
      $('html,body').animate({
        scrollTop: $(this.hash).offset().top
      }, 1200);
    });
    navbar = $('#navbar-main');
    distance = navbar.offset().top;
    $window = $(window);
    return $window.scroll(function() {
      if ($window.scrollTop() >= distance) {
        navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
      } else {
        navbar.removeClass('navbar-fixed-top');
      }
    });
  });

}).call(this);

