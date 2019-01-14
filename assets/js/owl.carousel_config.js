(function($) {
$(document).ready(function(){

var owl = $('.owl-carousel');
var target = $('.slider_slide_bg');
var owl_block = $('.slider_slide_block');

owl.owlCarousel({
    loop:true,
    margin:10,
    items:1,
    onChanged: callback
})

if ($('.owl-carousel').length) { 
	owl.trigger('refresh.owl.carousel');
	var owl_blockHeight = owl_block.outerHeight();
	target.height(owl_blockHeight+80);
}


function callback(changed) {
     var item = changed.page.index; // given indexes 0,2,3,4
    target.hide();
	$(".slide_" + item).show();
}

});




})( jQuery );

