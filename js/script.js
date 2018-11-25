window.onload = function(){
	$('.menuicon').click(function(){
		$('.menuicon').hide();
		$('.menuicon-white').css('visibility', 'visible');
		$('.menu').css('visibility', 'visible');
		$('.sub-menu').css('visibility', 'visible');
	});

	$('.menuicon-white').click(function(){
		$('.menuicon').show();
		$('.menuicon-white').css('visibility', 'hidden');
		$('.menu').css('visibility', 'hidden');
		$('.sub-menu').css('visibility', 'hidden');
	});
	
	 $(window).resize(function(){
		 if ($(window).width() > 720){
			 $('.menu').removeAttr('style');
			 $('.sub-menu').removeAttr('style');
			 $('.menuicon-white').removeAttr('style');
		 }
	 });
	$('.sl').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 2000
	});
	$('.rowss').slick({
		 dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
	});
	
	$(function() {
 
        var GammaSettings = {
                // order is important!
                viewport : [ {
                    width : 1200,
                    columns : 4
                }, {
                    width : 900,
                    columns : 3
                }, {
                    width : 500,
                    columns : 2
                }, { 
                    width : 320,
                    columns : 1
                }, { 
                    width : 0,
                    columns : 1
                } ]
        };
 
        Gamma.init( GammaSettings );
 
    });
};
$(document).ready(function(){
	
});