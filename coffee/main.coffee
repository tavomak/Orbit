$(document).ready ->
    $('[data-toggle=\'popover\']').each (index, element) ->
      contentElementId = $(element).data().target
      contentHtml = $(contentElementId).html()
      $(element).popover 
        content: contentHtml
        'trigger': 'hover'
        'html': true
        'placement': 'bottom'
      return
    
    $('.scroll').click (event) ->
        event.preventDefault()
        $('html,body').animate { scrollTop: $(@hash).offset().top }, 1200
        return

    navbar = $('#navbar-main')
    distance = navbar.offset().top
    $window = $(window)
    $window.scroll ->
        if $window.scrollTop() >= distance
            navbar.removeClass('navbar-fixed-top').addClass 'navbar-fixed-top'
        else
            navbar.removeClass 'navbar-fixed-top'
        return
    
    $ ->
        $('#formulario').validate submitHandler: (form) ->
            $(form).ajaxSubmit
            url: 'process.php'
            success: ->
                $('#formulario').hide()
                $('#textoContacto').append '<h1>Gracias por contactar con nosotros.</h1>'
                return
            return
        return