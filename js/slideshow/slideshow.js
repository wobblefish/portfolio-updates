//On page load the list is hidden and "Click to start slideshow" image is displayed
		//CSS Alignment tweaks used because intro image looked better in the center
		$(document).ready(function() {
			$('#jqueryList').hide();
			$('#contentRight').css('margin-right', '55%'); 
			$('#newSlideshow').css('border', '5px solid rgb(8, 23, 31)');
			$('<img src="images/slideshow/intro.jpg"/>');
			$('<img src="images/slideshow/1.jpg"/>');
			$('<img src="images/slideshow/2.jpg"/>');
			$('<img src="images/slideshow/3.jpg"/>');
			$('<img src="images/slideshow/4.jpg"/>');
			$('<img src="images/slideshow/5.jpg"/>');
			$('<img src="images/slideshow/6.jpg"/>');
		});
		
		//This flag is updated when the user clicks to start the slideshow
		var slideshowStart = 0; 
		
		function StartSlideshow(){	   //Initiated when image DIV is clicked		
			if (slideshowStart == 0) { //Prevent from starting the slideshow again if flag is not set to zero
				slideshowStart += 1;   //If not yet started, update the flag and fade out the intro image and begin to show the list
				$('#contentRight').fadeOut('slow'); 
				setTimeout(function(){HighlightList();}, 1000);
			}
		}

		function HighlightList() {
			//Fade in the list
			$('#jqueryList').fadeIn('slow');
			//Update CSS alignment
			$('#contentRight').css('margin-right', '3%');
			$('#footer').css('bottom', '0');
			
			var timeOuts = new Array();
			var count = 0; //
            var eT=3955; //Delay time for change in ms
			initLoop();  //Begin the slideshow
			
			function initLoop() { 
				//HIGHLIGHT the list item at the passed index for the set time
				$('li').each(function(index) {
					window.setTimeout(
					function() {
						highlight(index);
					}, 
					index*eT);
				});				
				
				//UN-HIGHLIGHT the list item at the passed index for the set time
				$('li').each(function(index) {
					window.setTimeout(
					function() {
						unHighlight(index);
					}, 
					(index + 1)*eT);								
				});
			}
						
			//Update the background/border/text color for the currently active list item using the passed index + give it a shadow and some IE special handling
			function highlight(index) {
				var listIndex = '.listItem' + index;
				$(listIndex).css('background-color', 'black');
				$(listIndex).css('border', '3px double #ffdd00');
				$(listIndex).css('color', 'white');
				$('#contentLeft').find(listIndex).addClass('iehighlight');
				$('#contentLeft').find(listIndex).addClass('shadow');

				//Fade out the previous picture and show the next one to correspond with the current list item
				$('#newSlideshow').fadeOut( 'fast', function(){
					$('#newSlideshow').css('background-image', 'url(images/slideshow/' + (index +1) +'.jpg)');
					$('#newSlideshow').css('background-size', '460px 250px');
					$('#newSlideshow').css('background-repeat', 'no-repeat');
					$('#newSlideshow').fadeIn( 'fast');
					if (index == 0) {$('#contentRight').fadeIn('slow');}
				});
				
				//Make the active item stand out a bit more with some alignment CSS tweaks
				$(listIndex).css('width', '470px');
				$(listIndex).css('margin-left', '-5px');
				$(listIndex).css('padding', '21px');
				
			}
			
			//Remove all the highlighting changes for the previously active item
			function unHighlight(index) {
				var listIndex = '.listItem' + index;
				$('#contentLeft').find(listIndex).removeClass('iehighlight');
				$('#contentLeft').find(listIndex).removeClass('shadow');
				$(listIndex).css('border', '1px solid black');
				$(listIndex).css('color', '#dddddd');
				$(listIndex).css('background-color', '#222222');
				$(listIndex).css('width', '460px');
				$(listIndex).css('margin-left', '0px');
				$(listIndex).css('padding', '19px');
				//Increment the counter to match the next list item
				count += 1;
				if (count > 5)
				{
				count = 0;
				initLoop();
				}
			}
		}