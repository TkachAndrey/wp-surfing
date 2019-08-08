jQuery(document).ready(function($){

///////////    headerSlider   ///////////////////

	const headerSlider = $('#headerSlider');

	headerSlider.on('initialized.owl.carousel', function(event){
		$('.slider__controls_number-active').text(event.item.index + 1);
		$('.slider__controls_number-total').text(event.item.count);
	});

 	headerSlider.owlCarousel({
	  	dots: false,
	  	items: 1,
	  	// loop: true, 
	  	smartSpeed: 1000,
	  	margin: 100
  	});


	$('#headerSliderLeft').click(function() {
	    headerSlider.trigger('prev.owl.carousel');
	})

	$('#headerSliderRight').click(function() {
	    headerSlider.trigger('next.owl.carousel');
	})
	

	headerSlider.on('changed.owl.carousel', function(event){
		$('.slider__controls_number-active').text(event.item.index + 1);
		$('.slider__controls_number-total').text(event.item.count);
	});

///////////////     shopSlider   ///////////////\

	const shopSlider = $('#shopSlider');
	shopSlider.owlCarousel({
		dots: false,
		smartSpeed: 1000,
		loop: true,
		responsive:{
		    0 : {
		    	items: 1,
		    },
		    992 : {
		    	items: 2,
		    	margin: 0
		    },
		    1254 : {
		    	items: 3,
		    	margin: 5
		    }
	  	}
	});

	$('#shopSliderLeft').click(function() {
	    shopSlider.trigger('prev.owl.carousel');
	})

	$('#shopSliderRight').click(function() {
	    shopSlider.trigger('next.owl.carousel');
	})

});
