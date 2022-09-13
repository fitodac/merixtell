$.noConflict();

(function($){

$('.menu-toggle').on('click', function(){
	if( !$('.main-navbar').hasClass('active') ){
		$('.main-navbar').addClass('active');
	}else{
		$('.main-navbar').removeClass('active');
	}
});




$(window).on('scroll', function(){
	fixNavbarToggle()
});

fixNavbarToggle();


function fixNavbarToggle(){
	if( $(window).scrollTop() > 50 ){
		$('nav.navbar .menu-toggle').addClass('fixed');
	}else{
		$('nav.navbar .menu-toggle').removeClass('fixed');
	}	
}






if( $('.gallery')[0] ){

	$('.gallery .gallery-item').simpleLightbox({
		history: false
	});

}




// Responsive images
if( $('.img-diagonal')[0] ){

	function imgResponsive(){
		$('.img-diagonal').each(function(){

			var _this = $(this);

			if( $(window).width() > 768 ){
				_this.css('backgroundImage', 'url('+_this.data('bg-desktop')+')');
			}

			if( $(window).width() <= 768 ){
				_this.css('backgroundImage', 'url('+_this.data('bg-mobile')+')');
			}

		});
	}

	imgResponsive();

	$(window).resize(function(){ imgResponsive() });
	
}










})(jQuery)





