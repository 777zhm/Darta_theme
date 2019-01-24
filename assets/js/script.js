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

// Start Ajax form sending
$('.contact_form').submit(function(e){
			e.preventDefault();
			send_contact_form( $(this) );
	   })

	  function send_contact_form( form ) {
		var form_data = form.serialize();
		form_data += '&action=contact_form';
		$.ajax({
		type: 'POST',
		url: '/wp-admin/admin-ajax.php',
		dataType: 'json',
		data: form_data,

		  success: function() {
			clearForm( form );
			show_ok();
		  },
		  error: function(){
			console.log('error');
		  }
		  });
	  }

	function show_ok() {
		$('#success_banner').modal();
	}
	function clearForm(container) {
		container.find("input[type=text], input[type=file], input[type=tel]  input[type=email], input[type=password], textarea").each(function() {
			$(this).val("");
		});
	}
	

}); //document.ready

})( jQuery );