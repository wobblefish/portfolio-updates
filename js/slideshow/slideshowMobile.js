/* global $ */

	// On page load the list is hidden and "Click to start slideshow" image is displayed on left
	//This flag is updated when the user clicks to start the slideshow
	$( document ).ready(function() {
	    $('li[class^="listItem"]').css('display', 'none');
	});

	var slideshowStart = 0; 
	var count = 0;
	var listSize = ( $('#jqueryList li').size() -1 );
	var delayTime=4000; //Delay time for change in ms
	
	function StartSlideshow() {		// Initiated when image DIV is clicked		
		
		if (slideshowStart == 0) {	// Prevent from starting the slideshow again if flag is not set to zero
			
			slideshowStart = 1;   		// If not yet started, update the flag and fade out the intro image and begin to show the list
			
			$( '#slideshow' ).fadeOut( 'slow', function() {
				// If page width < 893 hide, else
				if ( $(window).width() < 992 ) {
					$( '#slideshow' ).remove();  
				} else {
					$( '#slideshow' ).appendTo( '#contentRight' );
				}
			});
		
			HighlightList();
		}
	}
	
	function HighlightList() {
		//Fade in the list
		$( '#jqueryList' ).fadeIn( 'slow' );
		//Update CSS alignment
		// $( '#contentRight' ).css( 'margin-right', '3%' );

		var timeOuts = new Array();
		initLoop();  //Begin the slideshow
		
		
		function initLoop() {
			$( 'li[class^="listItem"]' ).each(function(index) {
				

				
				$(this).delay(delayTime*index).fadeIn(delayTime, function() {
					$(this).fadeOut(delayTime);
					$(this).remove();
						console.log(lastItemSelector);
					// console.log("lastItemSelector",lastItemSelector);
					
					//Fade out the previous picture and show the next one to correspond with the current list item
					$( '#slideshow' ).fadeOut( delayTime, function(){
						$( '#slideshow' ).css( 'background-image', 'url(images/slideshow/' + (index +1) +'.jpg)' );
						// $( '#slideshow' )'background-size', '460px 250px' );
						$( '#slideshow' ).css( 'background-repeat', 'no-repeat' );
						$( '#slideshow' ).fadeIn( delayTime );
						if (index == 0) {$( '#contentRight' ).fadeIn( 'fast' );}
					});							
					
					
					
				}); // callback
				var lastItemSelector = (index == 0 ) ?
						".listItem" + listSize
						: ".listItem" + (index);
				// $( lastItemSelector ).fadeOut(delayTime);
			}); // each Loop
		
			
		}; // initLoop
		
		//Update the background/border/text color for the currently active list item using the passed index + give it a shadow and some IE special handling
		function highlight(index) {
			var listIndex = '.listItem' + index;
			
			
			
			// $( listIndex ).fadeIn(delayTime);
			
			
			// $( listIndex ).css( 'background-color', 'black' );
			// $( listIndex ).css( 'border', '3px double #ffdd00' );
			// $( listIndex ).css( 'color', 'white' );
			
			
			
			
			// // $( '#contentLeft' ).find(listIndex).addClass( 'iehighlight' );
			// $( '#contentLeft' ).find(listIndex).addClass( 'shadow' );

			//Fade out the previous picture and show the next one to correspond with the current list item
			$( '#slideshow' ).fadeOut( 'fast', function(){
				$( '#slideshow' ).css( 'background-image', 'url(images/slideshow/' + (index +1) +'.jpg)' );
				// $( '#slideshow' )'background-size', '460px 250px' );
				$( '#slideshow' ).css( 'background-repeat', 'no-repeat' );
				$( '#slideshow' ).fadeIn( 'fast' );
				if (index == 0) {$( '#contentRight' ).fadeIn( 'slow' );}
			});
			
			
			
			
			//Make the active item stand out a bit more with some alignment CSS tweaks
			// $( listIndex ).css( 'width', '470px' );
			// $( listIndex ).css( 'margin-left', '-5px' );
			// $( listIndex ).css( 'padding', '21px' );
			
		}
				

		
		//Remove all the highlighting changes for the previously active item
		function unHighlight(index) {
			var listIndex = '.listItem' + index,
					nextIndex = '.listItem' + (index + 1) 
					nextIndex = (index <= listSize) ? 
						'.listItem' + (index + 1)  
						:'.listItem' + 0;
		
			console.log("beginning fadeout");
			$( listIndex ).fadeOut(delayTime, function() {
				console.log("before fadeIn");
				$( nextIndex ).fadeIn('slow');
				console.log("fadein complete");
			});
		
		
			// $( '#contentLeft' ).find(listIndex).removeClass( 'iehighlight' );
			// $( '#contentLeft' ).find(listIndex).removeClass( 'shadow' );
			// $( listIndex ).css( 'border', '1px solid black' );
			// $( listIndex ).css( 'color', '#dddddd' );
			// $( listIndex ).css( 'background-color', '#222222' );
			
			
			// $( listIndex ).css( 'width', '460px' );
			// $( listIndex ).css( 'margin-left', '0px' );
			// $( listIndex ).css( 'padding', '19px' );
			
			
			//Increment the counter to match the next list item
			count += 1;
			if (count > listSize -1 )
			{
				count = 0;
				initLoop();
			}
			
		}
		
		
		
		
		
		
		
	} // HighlightList
					
		
		
		

	