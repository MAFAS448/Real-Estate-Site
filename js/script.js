// ( function( $ ) {
//    // Init Skrollr
//    //1530 comment in skrollr.js (page body size)
//    var s = skrollr.init({
//        render: function(data) {
//            
//        }
//                       
//    });
//} )( jQuery );

jQuery(document).ready(function(){
//    $('.pack_wrpo').each(function() {
//        animationHover(this, 'bounce');
//    });
    
//  jQuery('.pack_wrp').hover(function(this.add)) 

//jQuery(".pack_wrp").hover(function(){
//    jQuery(this).addClass("slideInUp");
//    }, function(){
//        jQuery(this).removeClass("slideInUp");
//    jQuery(this).addClass("slideOutUp");
//});
   
    /* ---------------------	
		Animation
	/* --------------------- */
    
//     var s = skrollr.init({
//        render: function(data) {
//            //Debugging - Log the current scroll position.
//            //console.log(data.curTop);
//        }
//                       
//    });
    
   
    
//    jQuery('.slider').fractionSlider({
//		'fullWidth': 			true,
//		'controls': 			true, 
//		'pager': 			true,
//		'responsive': 			true,
//		'dimensions': 			"1000,400",
//	    'increase': 			false,
//		'pauseOnHover': 		true
//	});
//	


    
});

 

//var appMaster = {
//
//dataAnimations: function() {
//	  $('[data-animation]').each(function() {
//			var element = $(this);
//			element.addClass('animated');
//			element.appear(function() {
//				
//				var delay = ( element.data('delay') ? element.data('delay') : 1 );
//				if( delay > 1 ) element.css('animation-delay', delay + 'ms');				
//				element.addClass( element.data('animation') );
//				setTimeout(function() {
//					element.addClass('visible');
//				}, delay);
//				
//			});
//	  });
//      }
//      
//};

;(function () {
	
	// Animations

	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							el.addClass('fadeInUp animated');
							el.removeClass('item-animate animate_visible');
						},  k * 200, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '90%' } );
	};
	


	
	

	// Document on load.
	$(function(){

		
		contentWayPoint();
		

	});


}());



