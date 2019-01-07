(function($) {

$(document).ready(function() {


var containerEl = document.querySelector('.mixitup_container');
var radiosFilter = document.querySelector('.controls');
var mixer = mixitup(containerEl);

radiosFilter.addEventListener('change', function() {
    var checked = radiosFilter.querySelector(':checked');
    var selector = checked ? checked.value : 'all';
    mixer.filter(selector);
});



}); //document.ready

})( jQuery );