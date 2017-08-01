/*
*   CONTENTS
*
*   a. Header
*   b. Body and Contents
*   c. Elements and Plugins
*   d. Footer
**/

/* a. ------------- HEADER --------------- */

//introsec Parallax move of VM

/*function cssParallax(cont, el, radiusVal){
  $(cont).mousemove(function(event) {

      cx = Math.ceil($(window).width() / 2.0);
      cy = Math.ceil($(window).height() / 2.0);
      dx = event.pageX - cx;
      dy = event.pageY - cy;

      tiltx = (dy / cy);
      tilty = - (dx / cx);
      radius = Math.sqrt(Math.pow(tiltx,2) + Math.pow(tilty,2));
      degree = (radius * radiusVal);

      $(el, cont).css('-webkit-transform','rotate3d(' + tiltx + ', ' + tilty + ', 0, ' + degree + 'deg)');
      $(el, cont).css('transform','rotate3d(' + tiltx + ', ' + tilty + ', 0, ' + degree + 'deg)');
  });
}*/

$(document).ready(function() {
  cssParallax('.parallax-container', '.parallax-base', 20);
  cssParallax('.parallax-container.first', '.parallax-base', 20);
});

$(function() {
    $('.toggle-nav').click(function() {
          $('body').toggleClass('show-nav');
          return false;
    });
});

/* c. -------------- ELEMENTS AND PLUGINS ------------- */

// d. -------------- FOOTER
$(document).ready(function(){
   $('#closeQuote').click(function(){
    $('.free-quote').fadeToggle(1000);
});
});

(function($){"use strict";$('a.page-scroll').bind('click',function(event){var $anchor=$(this);$('html, body').stop().animate({scrollTop:($($anchor.attr('href')).offset().top-50)},1250,'easeInOutExpo');event.preventDefault();});$('body').scrollspy({target:'.navbar-fixed-top',offset:51})
$('.navbar-collapse ul li a').click(function(){$('.navbar-toggle:visible').click();});$("h1").fitText(1.2,{minFontSize:'35px',maxFontSize:'65px'});$('#mainNav').affix({offset:{top:100}})
new WOW().init();})(jQuery);

function popUpLang(){$('#popUpLang').css("display","block");}
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.toTop').fadeIn();
        } else {
            $('.toTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.toTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
