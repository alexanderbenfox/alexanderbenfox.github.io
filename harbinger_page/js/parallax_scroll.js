$(document).ready(function(){
	$(window).bind('scroll',function(e){
   		parallaxScroll();
   	});
   	
   	function parallaxScroll(){
   		var body = document.body,
			html = document.documentElement;

		var height = Math.max(	body.scrollHeight, body.offsetHeight, 
           						html.clientHeight, html.scrollHeight, html.offsetHeight );

		var scrollFactor = 850/height;

		var backgroundscroll = .1 * scrollFactor;
			closemountainscroll = .5 * scrollFactor;
			farmountainscroll = .7 * scrollFactor;
			mountaintreesscroll = .45 * scrollFactor;
			mountaintreesforegroundscroll = .2 * scrollFactor;

		var baroffset = $('.mountaintrees').height();

   		var scrolledY = $(window).scrollTop();
   		if(scrolledY != 0)
			$('.bgWrapper').css('background-position','center -'+((scrolledY*.2))+'px');
		$('.closemountain').css('top','-'+((scrolledY*.1))+'px');
		$('.farmountain').css('top','-'+((scrolledY*.15))+'px');
		$('.mountaintrees').css('top','-'+((scrolledY*mountaintreesscroll))+'px');
		$('.mountaintreesforeground').css('top','-'+((scrolledY*mountaintreesforegroundscroll))+'px');

		if(scrolledY > 350){
			$('.blackbar').css('background-size',' 150% auto');
		}
		else
		{
			$('.blackbar').css('background-size',' 100% auto');
		}
   	}
});