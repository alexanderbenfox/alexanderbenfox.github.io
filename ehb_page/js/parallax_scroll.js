$(document).ready(function(){
	$(window).bind('scroll',function(e){
   		parallaxScroll();
   	});
   	
   	
   	function parallaxScroll(){
   		$('.blackbar').css('visibility', 'visible');
   		var body = document.body,
			html = document.documentElement;

		var height = Math.max(	body.scrollHeight, body.offsetHeight, 
           						html.clientHeight, html.scrollHeight, html.offsetHeight );
		var backgroundscroll = .1;
			closemountainscroll = .5;
			farmountainscroll = .7;
			mountaintreesscroll = .45;
			mountaintreesforegroundscroll = .2;
   		var scrolledY = $(window).scrollTop();
		$('.bgWrapper').css('background-position','center -'+((scrolledY*backgroundscroll))+'px');
		$('.closemountain').css('top','-'+((scrolledY*closemountainscroll))+'px');
		$('.farmountain').css('top','-'+((scrolledY*farmountainscroll))+'px');
		$('.mountaintrees').css('top','-'+((scrolledY*mountaintreesscroll))+'px');
		$('.mountaintreesforeground').css('top','-'+((scrolledY*mountaintreesforegroundscroll))+'px');

		if(scrolledY > 280){
			$('.blackbar').css('background-size',' 250% auto');
		}
		else
		{
			$('.blackbar').css('background-size',' 100% auto');
		}
   	}

   	
});