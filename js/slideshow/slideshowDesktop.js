/* global $ */
			
			// On page load the list is hidden and "Click to start slideshow" image is displayed on left
			//This flag is updated when the user clicks to start the slideshow
			var slideshowStart = 0; 
			
			function StartSlideshow() {		// Initiated when image DIV is clicked		
				
				if (slideshowStart == 0) {	// Prevent from starting the slideshow again if flag is not set to zero
					
					slideshowStart = 1;   		// If not yet started, update the flag and fade out the intro image and begin to show the list
					
					$( '#slideshow' ).fadeOut( 'slow', function() {
						$( '#slideshow' ).removeClass( 'intro' ).empty();
						$( '#slideshow' ).appendTo( '#contentRight' );
						// If window resized and width < 992 hide image
						$( window ).resize( function() {
								if ( $(window).width() < 992 ) {
									$( '#slideshow' ).remove();
								}
						});
						HighlightList();
					});
				}
			}
	
			function HighlightList() {
				//Fade in the list
				$( '#jqueryList' ).fadeIn( 'slow' );
				//Update CSS alignment
				// $( '#contentRight' ).css( 'margin-right', '3%' );

				var timeOuts = new Array();
				var count = 0; //
	  	  var eT=8000; //Delay time for change in ms
				initLoop();  //Begin the slideshow
				
				function initLoop() {
					//HIGHLIGHT the list item at the passed index for the set time
					$( 'li[class^="listItem"]' ).each(function(index) {
						window.setTimeout(
						function() {
							highlight(index);
						}, 
						index*eT);
						
						console.log("highlight index", index)
					});				
					
					//UN-HIGHLIGHT the list item at the passed index for the set time
					$( 'li[class^="listItem"]' ).each(function(index) {
						window.setTimeout(
						function() {
							unHighlight(index);
						}, 
						(index + 1)*eT);								
					
						console.log("unhighlight index", index)
					});
				
					
					
				}
							
				
				
				
				//Update the background/border/text color for the currently active list item using the passed index + give it a shadow and some IE special handling
				function highlight(index) {
					var listIndex = '.listItem' + index;
					
					$( listIndex ).css( 'background-color', 'black' );
					$( listIndex ).css( 'border', '3px double #ffdd00' );
					$( listIndex ).css( 'color', 'white' );
					// $( '#contentLeft' ).find(listIndex).addClass( 'iehighlight' );
					// $( '#contentLeft' ).find(listIndex).addClass( 'shadow' );
	
					// ** IMAGES **
					//Fade out the previous picture and show the next image to correspond with the current list item
					$( '#slideshow' ).fadeOut( 'fast', function(){
						$( '#slideshow' ).empty();
						$( '#slideshow' ).css( 'background-image', 'url(images/slideshow/' + (index +1) +'.jpg)' );
						$( '#slideshow' ).append( '<img class="fading-image" src="/images/slideshow/' + (index +1) +'.jpg" />' );
						$( '.fading-image' ).css( 'visibility', 'hidden');
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
					var listIndex = '.listItem' + index;
					$( '#contentLeft' ).find(listIndex).removeClass( 'iehighlight' );
					$( '#contentLeft' ).find(listIndex).removeClass( 'shadow' );
					$( listIndex ).css( 'border', '1px solid black' );
					$( listIndex ).css( 'color', '#dddddd' );
					$( listIndex ).css( 'background-color', '#222222' );
					
					
					// $( listIndex ).css( 'width', '460px' );
					// $( listIndex ).css( 'margin-left', '0px' );
					// $( listIndex ).css( 'padding', '19px' );
					
					
					//Increment the counter to match the next list item
					count += 1;
					if (count > $('#jqueryList li').size() -1 )
					{
						count = 0;
						initLoop();
					}
					
				}
				
				
			}