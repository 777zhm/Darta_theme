(function($) {
$(document).ready(function() {

// Start Main menu backgroud on scroll	
	window.onscroll = function() {
	var scrolled = window.pageYOffset || document.documentElement.scrollTop;

	if(scrolled > 10){
	  $('.backtotop_button').fadeIn(500);
	  $('header').addClass('menu_fixed');

	} else{
	  $('.backtotop_button').fadeOut(500);
	  $('header').removeClass('menu_fixed');
	}

	}
// End Main menu backgroud on scroll

// Start Backtotop button	      
	$('.backtotop_button').click(function(){ 
        $('html,body').animate({ scrollTop: 0 } );
        return false; 
	});
// End Backtotop button

// Start MoveToSection button
	$("#circle_decorative_anchor").click(function() {
		var headerHeight = $('header').outerHeight();
	    $([document.documentElement, document.body]).animate({
	    	scrollTop: ($("#anchor_target").offset().top - headerHeight - 10) + 'px'
	    }, 400);
	});
// End MoveToSection button

// Start form validate
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
// End form validate

}); //document.ready

})( jQuery );