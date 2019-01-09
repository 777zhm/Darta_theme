(function($) {
$(document).ready(function(){

var owl = $('.owl-carousel');
var target = $('.slider_slide_bg')

owl.owlCarousel({
    loop:true,
    margin:10,
    items:1,
    onChanged: callback
})

function callback(changed) {
     var item = changed.item.index; // given indexes 0,2,3,4
     console.log(item);
    $(target).hide();
	$(".slide_" + item).show();
}

});
})( jQuery );

