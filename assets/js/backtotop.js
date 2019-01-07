(function($) {

$(document).ready(function() {

	window.onscroll = function() { //вызываем при скролле
	var scrolled = window.pageYOffset || document.documentElement.scrollTop; // считаем, сколько проскролили

	if(scrolled > 10){
	  $('.backtotop_button').fadeIn(500); // когда проскоблили больше 10 пикселей - кнопка появляется за полсекунды (500 миллисекунд)
	  $('header').addClass('menu_fixed');

	} else{
	  $('.backtotop_button').fadeOut(500); // когда проскоблили вверх - кнопка исчезает за полсекунды (500 миллисекунд)
	  $('header').removeClass('menu_fixed');
	}

	}

	      
	$('.backtotop_button').click(function(){ 
	        $('html,body').animate({ scrollTop: 0 } );
	        return false; 
	});



	var headerHeight = $('header').outerHeight();

	$("#circle_decorative_anchor").click(function() {
	    $([document.documentElement, document.body]).animate({
	    	scrollTop: ($("#anchor_target").offset().top - headerHeight - 10) + 'px'
	    }, 400);
	});


}); //document.ready

})( jQuery );