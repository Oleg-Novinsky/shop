$(function(){
	
	$('.slider1').mobilyslider({
            
		animationSpeed: 500,
		autoplay: true,
		autoplaySpeed: 6000,
                bullets: true,
                arrows: true
		
        });
	
	$('.slider2').mobilyslider({
		transition: 'vertical',
		animationSpeed: 500,
		autoplay: true,
		autoplaySpeed: 3000,
		pauseOnHover: true,
		bullets: false
	});
	
	$('.slider3').mobilyslider({
		transition: 'fade',
		animationSpeed: 300,
		bullets: false,
                autoplaySpeed: 10000
	});
	
});
