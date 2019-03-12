// JavaScript Document


jQuery(function($) {
// ---------------------------------------------------------------------------------




// mobile navigation
$('.mobile-nav-icon a').on('click', function(e){
	e.preventDefault();
	$('.mobile-nav').slideToggle(400);
	$('.mobile-nav-close').show(200);
	$('.mobile-nav-icon').hide(200);
});

$('.mobile-nav-close a').on('click', function(e){
	e.preventDefault();
	$('.mobile-nav').slideToggle(400);
	$('.mobile-nav-icon').show(200);
	$('.mobile-nav-close').hide(200);
});

$(window).resize(function(){
	if ($(window).width() >= 680){
		$('.mobile-nav-close').hide(200);
		$('.mobile-nav-icon').hide(200);
		$('.mobile-nav').slideUp(400);
	} else {
		$('.mobile-nav-icon').show(200);
	}
});

// $(window).resize(function(){
// 	if ($(window).width() <= 680){
// 		$('.mobile-nav-icon').show(200);
// 	}
// });



// ---------------------------------------------------------------------------------
// ----- RATES ---------------------------------------------------------------------
// ---------------------------------------------------------------------------------
$(document).delegate('.rates-filter-showspecies', 'click', function(e){
	e.preventDefault();
	$('.pricing-table-block').toggleClass('show-fish-species');
});



// ---------------------------------------------------------------------------------------------
});