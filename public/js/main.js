//----------------------------------------------
// Slider with 5 populars posts
$(function(){
    $('#vertical-ticker').totemticker({
        row_height	:	'100px',
        next		:	'#ticker-next',
        previous	:	'#ticker-previous',
        stop		:	'#stop',
        start		:	'#start',
        mousestop	:	true,
    });
});

//----------------------------------------------
// Load preloader
$(window).load(function() {

    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");

});