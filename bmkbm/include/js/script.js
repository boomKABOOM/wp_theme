var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] === sParam) {
      return sParameterName[1] === undefined ? true : sParameterName[1];
    }
  }
};

$(document).ready(function(){
  scrollAdjustments();

  $('#toggle-nav, #close-nav').click(function(){
    $('.nav nav').toggleClass("active");
  });

  $('nav ul li:has(ul)').append('<div class="expand mobile-only">+</div>');
  $('.expand').click(function(){
    if($(this).html() == '+'){
      $(this).html('-');
      $(this).parent().find('> ul').slideDown();
    }
    else{
      $(this).html('+');
      $(this).parent().find('> ul').slideUp();
    }
  });

  $('#quicklinks a').click(function (){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top - 100
		}, 500);
		return false;
	});

  if($('.slide-up').length > 0){
    $('.slide-up').each(function(){
      $(this).removeClass('inactive');
    });
  }

  if ($('#slider').length > 0){
    $('#slider .slide').first().removeClass('inactive');
    var counter = 1;
    $('#slider .slide').each(function(){
      $(this).attr('data-slide-id',counter);
      counter ++;
    });

    var i = 1;
    var slider_length = $('#slider').length + 1; //offset by 1
    setInterval(function(){
      if(slider_length < (i+1)){
        i = 1;
      } else {
        i ++;
      }
      $('#slider .slide').each(function(){
        $(this).addClass('inactive');
      });
      $('[data-slide-id=' + i + ']').removeClass('inactive');
      console.log(i);
    }, 3000);

  }
  setInterval(function(){
    if($(window).scrollTop() > 5){
      $('[data-become-sticky=true]').addClass('sticky');
      $('.nav').addClass('sticky');
    } else {
      $('[data-become-sticky=true]').removeClass('sticky');
      $('.nav').removeClass('sticky');
    }
  },300);
});

function scrollAdjustments(){
  var scrollPos = $(window).scrollTop();
  var visibleBottom = scrollPos + $(window).height();
  var slowScroll = Math.round(scrollPos*.125);

  $('.slowfade.container').css('opacity',(1 - (slowScroll*.02)));
  $('.slowfade.container').css('top',slowScroll*2.5);

  if($(document).width() > 576){
    $('.parallax').each(function(){
    var distance = $(this).offset().top;
      if ( visibleBottom + 100  >= distance ) {
        $('.parallax').css('top',-slowScroll);
        $('.parallax').css('margin-bottom',-slowScroll);
        $('.parallax .fadein.container').css('opacity',(0 + (slowScroll*.0085)));
      }
    });
  }
}

$(document).scroll(function(){
  scrollAdjustments();
});
