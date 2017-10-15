/* global $, Image */

// On page load the list is hidden and "Click to start slideshow" image is displayed on left
//This flag is updated when the user clicks to start the slideshow
var slideshowStart = 0;
var count = 0;
var delayTime = 2000; //Delay time for change in ms
var fadeInterval,
		HLTimeout,
		uHLTimeout;



$(document).ready(resizeHeaders);
// $(window).on('resize',resizeHeaders);

function resizeHeaders() {

	if ($(window).height() < 300) {
		//Change header for short displays
		// Note: would like to simplify this with some height based media queries
		
		
  		// Change the text content and size
			$('.navbar-brand').html("<i class='fa fa-cubes'></i>Matt McNeil <span class='text-small '>Web Development Portfolio<span>");
			$('.nav, .navbar-brand').css({'font-size' : '120%', 'height' : 'auto', 'padding' : '15px'});
			$('.nav, .nav.navbar.navbar-default.navbar-static-top').css('padding', '0');
			$('.navbar-collapse a.nav-link').css({'padding' : '0px !important', 'font-size': '60%'});
				// 'margin' : '0px !important'});
			
			
			// 
			$('button.navbar-toggle.collapsed').css({
    		'margin' : '10px',
    		'padding' : '5px'
  		});
  		
			
			//Minimize Footer 
			$('.footer').css({
					'font-size': '61%',
    			'padding' : '5px !important'
			});
			
			// $('a.navbar-brand').css('position', 'absolute').animate({padding : '1px 25px', top: '10px'}, 500);
			$('#slideshow').css({
				'max-height' : .2*$(window).height(), 
				'background-size' : '400%' 
			}).html('<h1 class="text-center ml-1">Click Here To Begin Slideshow</h1>');
		// });
	}
}
	
$(document).ready(function() {
	
	function preloadImage(url)
	{
	    var img=new Image();
	    img.src=url;
	}
	for (var index=1; index <= 10; index++) {
		console.log("loading", '/images/slideshow/' + index + ".jpg")
		preloadImage('/images/slideshow/' + index + ".jpg");
	}
	
	// $(window).click(function() {
	// 	console.log("window clicked");
	// 	console.log(HLTimeout, uHLTimeout);
	// 	clearTimeout(HLTimeout);
	// 	clearTimeout(uHLTimeout);
	// })
	
	// Resize check ()
	// WIP - will need to undo all of the CSS changes from Highlight or Rotate functions
	// to begin performing the opposite function
	
// $(window).resize(function() {
// 	if ($(window).width() < 992) {
// 		clearTimeout(HLTimeout);
// 		clearTimeout(uHLTimeout);
// 		$('#jqueryList').appendTo('#slideshow-mobile-row div');
// 		RotateListItems();
// 	} else {
// 		$( "#slideshow-mobile-row div" ).has( "ul" ).appendTo('#contentLeft');
// 		$('#slideshow').css('width', '100%').appendTo('#contentRight');
// 		clearInterval(fadeInterval);
// 		$('#jqueryList li').removeAttr('style');
// 		// $('#jqueryList').css('margin-top', '-182px').css('width', '100%').css('opacity', '0.94').fadeIn(500);
// 		$('li[class^="listItem"]').show();
// 		HighlightList();
// 	}
// });

	
}); //document ready


	function StartSlideshow() { // Initiated when image DIV is clicked		

		if (slideshowStart == 0) { // Prevent from starting the slideshow again if flag is not set to zero

			slideshowStart = 1; // If not yet started, update the flag and fade out the intro image and begin to show the list

			$('#slideshow').fadeOut('slow', function() {
				$('#slideshow').removeClass('intro')
				// If window resized and width < 992 hide image
				
				// For Phone Landscape view
				if ($(window).height() < 768) {
					// $( '#slideshow' ).remove();
					$('#slideshow').empty().css({
						'min-height' : '150px',
						'max-height' : .5*$(window).height(),
						'margin-top' : '0px'
					});
					
					
					// $('footer').animate({margin : '0 0 -95px 0'}, 1500);
					$('footer').slideUp('3000');
					
					$('#jqueryList').css({
						'margin-top' : '-182px',
						'width' : '100%',
						'opacity' : '0.94'
					}).fadeIn(500);
					$('#jqueryList').appendTo('#slideshow-mobile-row div');
					RotateListItems();
				}
				else {
					$('#slideshow').css({
						'width' : '100%',
						'max-height' : '444px'
					}).appendTo('#contentRight');
					// check if it's on the right
					// move back if so
					HighlightList();
				}

			});
		}
	}
	
	// Desktop List Highlighting function
	function HighlightList() {
		//Fade in the list
		$('#jqueryList').fadeIn('slow');
		//Update CSS alignment
		// $( '#contentRight' ).css( 'margin-right', '3%' );

		var timeOuts = new Array();
		var count = 0; //
		initLoop(); //Begin the slideshow

		function initLoop() {
			//HIGHLIGHT the list item at the passed index for the set time
			$('li[class^="listItem"]').each(function(index) {
				HLTimeout = window.setTimeout(
					function() {
						highlight(index);
					},
					index * delayTime);

				// console.log("highlight index", index)
			});

			//UN-HIGHLIGHT the list item at the passed index for the set time
			$('li[class^="listItem"]').each(function(index) {
				uHLTimeout = window.setTimeout(
					function() {
						unHighlight(index);
					},
					(index + 1) * delayTime);

				// console.log("unhighlight index", index)
			});
		}




		//Update the background/border/text color for the currently active list item using the passed index + give it a shadow and some IE special handling
		function highlight(index) {
			var listIndex = '.listItem' + index;

			$(listIndex).css('background-color', 'black').css('border', '3px double #ffdd00').css('color', 'white');
			// $( '#contentLeft' ).find(listIndex).addClass( 'iehighlight' );
			// $( '#contentLeft' ).find(listIndex).addClass( 'shadow' );


	// ** IMAGES **
			//Fade out the previous picture and show the next image to correspond with the current list item
			$('#slideshow').fadeOut('fast', function() {

				var imgSource = "/images/slideshow/" + (index + 1) + ".jpg";
				console.log(imgSource);

				$( '#slideshow' ).empty();
				$('#slideshow').css('background-image', 'url(' + imgSource + ')');
				$( '#slideshow' ).append( '<img class="fading-image" src="' + imgSource + '" />' );
				$('#slideshow img').attr('src', imgSource);


				$('.fading-image').css('visibility', 'hidden');
				// $( '#slideshow' )'background-size', '460px 250px' );
				$('#slideshow').css('background-repeat', 'no-repeat').fadeIn('fast');
				if (index == 0) { $('#contentRight').fadeIn('slow'); }
			});

			//Make the active item stand out a bit more with some alignment CSS tweaks
			// $( listIndex ).css( 'width', '470px' ).css( 'margin-left', '-5px' ).css( 'padding', '21px' );

		}

		//Remove all the highlighting changes for the previously active item
		function unHighlight(index) {
			var listIndex = '.listItem' + index;
			$('#contentLeft').find(listIndex).removeClass('iehighlight').removeClass('shadow');
			$(listIndex).css('border', '1px solid black').css('color', '#dddddd').css('background-color', '#222222');

			// $( listIndex ).css( 'width', '460px' ).css( 'margin-left', '0px' ).css( 'padding', '19px' );


			//Increment the counter to match the next list item
			count += 1;
			if (count > $('#jqueryList li').length - 1) {
				count = 0;
				initLoop();
			}

		}

	}
	
	//jQuery Mobile Fade function
	function RotateListItems() {

		$('#jqueryList li').css({
			'min-height' : '5%',
			'padding' : '20px',
			'margin-top' : '60px'
		}).hide();
		$('#slideshow').css('background-image', 'url(images/slideshow/1.jpg)').fadeIn();
		$('#jqueryList li').eq(0).fadeIn();
		$(function() {
			var list_slideshow = $('#jqueryList'),
				listItems = list_slideshow.children('li'),
				listLen = listItems.length,
				i = 0,
				changeList = function() {
					listItems.eq(i).fadeOut(500, function() {
						i += 1;
						if (i === listLen) {
							i = 0;
						}
						// listItems.eq(i).css('position', 'absolute').css('bottom', '0').css('vertical-align', 'text-bottom').fadeIn(500);
						listItems.eq(i).fadeIn(500);
					});
					console.log(i + 1);
					//Fade out the previous picture and show the next image to correspond with the current list item
					$('#slideshow').fadeOut('fast', function() {
						$('#slideshow').css('background-image', 'url(images/slideshow/' + (i + 2) + '.jpg)');
						$('#slideshow').empty().append('<img class="fading-image" src="/images/slideshow/' + (i + 2) + '.jpg" />');
						$('.fading-image').css('visibility', 'hidden');
						$('#slideshow').css('background-repeat', 'no-repeat');
						$('#slideshow').fadeIn('fast');
					});
				};
			listItems.not(':first').hide();


			fadeInterval = setInterval(changeList, delayTime);
		}); //jQuery mobile fade function
	} // RotateListItems
