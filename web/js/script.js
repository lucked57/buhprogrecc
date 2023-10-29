$(document).ready(function() {
  $(".container-i").click(function() {
    $(".stick").toggleClass(function () {
      return $(this).is('.open, .close') ? 'open close' : 'open';
    });
  });


/*$('a').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 90
            }, 1000);
            event.preventDefault();
            // code 
            
        });

        });*/


$(function() {
              $('.sidebar-nav a').bind('click', function(event) {
                  var $anchor = $(this);
                  $('html, body').stop().animate({
                      scrollTop: $($anchor.attr('href')).offset().top - 100
                  }, 1500, 'easeInOutExpo');
                  event.preventDefault();
              });
          });