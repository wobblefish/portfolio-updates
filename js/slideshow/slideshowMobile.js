/* global $ */

	// On page load the list is hidden and "Click to start slideshow" image is displayed on left
	//This flag is updated when the user clicks to start the slideshow
	$( document ).ready(function() {
	    // $('li[class^="listItem"]').css('display', 'none');
	});

	var slideshowStart = 0; 
	var count = 0;
	// var listSize = ( $('#jqueryList li').length-1 );
	var delayTime=5000; //Delay time for change in ms
	
	
	function StartSlideshow() {		// Initiated when image DIV is clicked		
		
		if (slideshowStart == 0) {	// Prevent from starting the slideshow again if flag is not set to zero
			
			slideshowStart = 1;   		// If not yet started, update the flag and fade out the intro image and begin to show the list
			
			var slideshow = $( '#slideshow' );
			// slideshow.fadeOut( 'slow', function() {
				// If page width < 893 hide, else
				// $('li[class^="listItem"]').css('display', 'none');
				// if ( $(window).width() < 992 ) {
				// 	$( '#slideshow' ).remove();  
				// } else {
				// 	$( '#slideshow' ).appendTo( '#contentRight' );
				// }
				$( '#slideshow' ).removeClass( 'intro' ).empty();
				$( '#slideshow' ).css( 'min-height', '250px').css( 'max-height', '200px' ).css( 'border', '0' );
				$( '#slideshow' ).css( 'margin-top', '0px');
				// $( '#contentLeft' ).prepend( slideshow );
				// slideshow.css('display', 'unset')
				// $( '#contentRight' ).remove();
				// $( '#contentLeft' ).removeClass( 'col-xs-8' ).addClass( 'col-xs-12' );
				$( '#jqueryList' ).css( 'margin-top', '-182px' ).css( 'width', '100%' ).css( 'opacity', '0.7' ).fadeIn(500);
				RotateListItems();
			// });
		}
	}
	
	function RotateListItems() {
		$(function () {
			var list_slideshow = $( '#jqueryList' ),
			    listItems = list_slideshow.children('li'),
			    listLen = listItems.length,
			    i = 0,
			    changeList = function () {
			        listItems.eq(i).fadeOut(500, function () {
			            i += 1;
			            if (i === listLen) {
			                i = 0;
			            }
			            listItems.eq(i).css('position', 'absolute').css('bottom', '0').css('vertical-align', 'text-bottom').fadeIn(500);
			        });
		        console.log(i+1);
	        	//Fade out the previous picture and show the next image to correspond with the current list item
						$( '#slideshow' ).fadeOut( 'fast', function() {
							$( '#slideshow' ).css( 'background-image', 'url(images/slideshow/' + (i +2) +'.jpg)' );
							$( '#slideshow' ).append( '<img class="fading-image" src="/images/slideshow/' + (i +2) +'.jpg" />' );
							$( '.fading-image' ).css( 'visibility', 'hidden');
							$( '#slideshow' ).css( 'background-repeat', 'no-repeat' );
							$( '#slideshow' ).fadeIn( 'fast' );
						});
			    };
			listItems.not(':first').hide();
			
			// ** IMAGES **
			//Fade out the previous picture and show the next image to correspond with the current list item
			$( '#slideshow' ).fadeOut( 'fast', function(){
				$( '#slideshow' ).empty();
				$( '#slideshow' ).css( 'background-image', 'url(images/slideshow/' + (i +1) +'.jpg)' );
				// $( '#slideshow' ).append( '<img class="fading-image" src="/images/slideshow/' + (i +1) +'.jpg" />' );
				// $( '.fading-image' ).css( 'visibility', 'hidden');
				// $( '#slideshow' )'background-size', '460px 250px' );
				// $( '#slideshow' ).css( 'background-repeat', 'no-repeat' );
				$( '#slideshow' ).fadeIn( 'fast' );
				if (i == 0) {$( '#contentRight' ).fadeIn( 'slow' );}
			});

			setInterval(changeList, delayTime);
		});
}
		

	