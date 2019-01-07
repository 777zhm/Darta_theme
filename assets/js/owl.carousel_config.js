(function($) {
$(document).ready(function(){

var owl = $('.owl-carousel');
var target = $('.casestudy_slide_bg')
owl.owlCarousel({
    loop:true,
    margin:10,
    items:1
})
owl.on('changed.owl.carousel', function(event) {	
   	// target.addClass('test');
})

});//document.ready
})( jQuery );

