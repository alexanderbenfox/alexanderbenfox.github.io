$(document).ready(function(){
	$('.fade').slick({
		dots: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		prevArrow: $('.prev'),
        nextArrow: $('.next'),
	});
});