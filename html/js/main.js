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
    $window.scroll(function() {
      if ($window.scrollTop() >= distance) {
        navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
      } else {
        navbar.removeClass('navbar-fixed-top');
      }
    });
    return $(function() {
      $('#formulario').validate({
        submitHandler: function(form) {
          $(form).ajaxSubmit;
          ({
            url: 'process.php',
            success: function() {
              $('#formulario').hide();
              $('#textoContacto').append('<h1>Gracias por contactar con nosotros.</h1>');
            }
          });
        }
      });
    });
  });

}).call(this);

