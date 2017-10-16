/* global $, Image */

// On page load the list is hidden and "Click to start slideshow" image is displayed on left
//This flag is updated when the user clicks to start the slideshow
var slideshowStart = 0;
var count = 0;
var delayTime = 4000; //Delay time for change in ms
var fadeInterval,
	HLTimeout,
	uHLTimeout,
	continueLoop;
var footerHeight;

$(document).ready(resizeHeaders);
$(window).on('resize',resizeHeaders);

function resizeHeaders() {

	if ($(window).height() < 300) {
		//Change header for short displays

		// Change the text content and size
		$('.navbar-brand').html("<i class='fa fa-cubes'></i>Matt McNeil <span class='text-small '>Web Development Portfolio<span>");

		$('#slideshow').css({
			'max-height': .2 * $(window).height(),
			'background-size': '400%'
		}).html('<h1 class="text-center ml-1">Click Here To Begin Slideshow</h1>');
		
		footerHeight = 56;
	}
	else {
		//reverse the changes (display fullscreen version)
		$('.navbar-brand').html("<i class='fa fa-cubes'></i>Matt McNeil<br /><span class='text-small '>Web Development Portfolio<span>");

		// Get the currently displayed image and drop it back into the slideshow container
		var currentImage = $('#slideshow').css('background-image');

		// Clean off the url() and full path from URL
		currentImage = currentImage.match('(/images.+)')[0].replace('url(', '').replace(')', '').replace(/\"/gi, "");
		console.log("The current image is", currentImage);

		$('#slideshow').css({
			'max-height': '',
			'background-size': '100% auto'
		}).html('<img src="' + currentImage + '" />');
		
		footerHeight = 120;

	}
}

function showHideFooter() {
	if ( $('.footer').is(':visible') ) {
		$('footer').slideUp('3000');
		$('.footerButton i').removeClass('fa-arrow-circle-o-down').addClass('fa-arrow-circle-o-up')
		$('.footerButton').animate({'bottom' : '0'}, 500);
	} else {
		$('footer').slideDown('3000');
		$('.footerButton i').removeClass('fa-arrow-circle-o-up').addClass('fa-arrow-circle-o-down')
		$('.footerButton').animate({'bottom' : footerHeight }, 500);
	}
}

$(document).ready(function() {

	function preloadImage(url) {
		var img = new Image();
		img.src = url;
	}
	for (var index = 1; index <= 10; index++) {
		console.log("loading", '/images/slideshow/' + index + ".jpg")
		preloadImage('/images/slideshow/' + index + ".jpg");
	}
	
	$('#showHideFooter').click(function() {
		showHideFooter();
	});

	//Testing slideshow stop/start with click

	// $(window).click(function() {
	// 	console.log("window clicked");
	// 	console.log(HLTimeout, uHLTimeout);
	// 	continueLoop = false;
	// 	// clearTimeout(HLTimeout);
	// 	// clearTimeout(uHLTimeout);
	// 	 //$('body').load('/index.php');
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
			$('#slideshow').removeClass('intro');
			// If window resized and width < 992 hide image

			//Detect window width for mobile or desktop slideshow 
			if ($(window).width() < 768) {
				// $( '#slideshow' ).remove();
				$('#slideshow').empty().css({
					// 'min-height' : '150px',
					'min-height': .5 * $(window).height(),
					'max-height': .8 * $(window).height(),
					'margin-top': '0px'
				});


				// $('footer').animate({margin : '0 0 -95px 0'}, 1500);
				footerHeight = $('footer.footer').height() + 36;
				showHideFooter();

				$('#jqueryList').css({
					'margin-top': '-182px',
					'width': '100%',
					'opacity': '0.94'
				}).fadeIn(500);
				$('#jqueryList').appendTo('#slideshow-mobile-row div');
				RotateListItems();
			}
			else {
				$('#slideshow').css({
					'width': '100%',
					'min-height': $('#contentRight').height,
					'max-height': '444px'
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
		});

		//UN-HIGHLIGHT the list item at the passed index for the set time
		$('li[class^="listItem"]').each(function(index) {
			uHLTimeout = window.setTimeout(
				function() {
					unHighlight(index);
				},
				(index + 1) * delayTime);
		});
	}
	
	//Update the background/border/text color for the currently active list item using the passed index + give it a shadow and some IE special handling
	function highlight(index) {
		var listIndex = '.listItem' + index;

		$(listIndex).css('background-color', 'black').css('border', '3px double #ffdd00').css('color', 'white');
		// $( '#contentLeft' ).find(listIndex).addClass( 'iehighlight' );
		// $( '#contentLeft' ).find(listIndex).addClass( 'shadow' );

		RotateImages(index);

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

function RotateImages(index) {
	// ** IMAGES **
	//Fade out the previous picture and show the next image to correspond with the current list item
	$('#slideshow').fadeOut('fast', function() {

		var imgSource = "/images/slideshow/" + (index + 1) + ".jpg";
		console.log(imgSource);

		$('#slideshow').empty();
		$('#slideshow').css('background-image', 'url(' + imgSource + ')');
		$('#slideshow').append('<img class="fading-image" src="' + imgSource + '" />');
		$('#slideshow img').attr('src', imgSource);


		$('.fading-image').css('visibility', 'hidden');
		// $( '#slideshow' )'background-size', '460px 250px' );
		$('#slideshow').css('background-repeat', 'no-repeat').fadeIn('fast');
		if (index == 0) { $('#contentRight').fadeIn('slow'); }
	});
}

//jQuery Mobile Fade function
function RotateListItems() {

	$('#jqueryList li').css({
		'min-height': '5%',
		'padding': '20px',
		'margin-top': '60px'
	}).hide();

	RotateImages(0);
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
					RotateImages(i);
					listItems.eq(i).fadeIn(500);
				});
			};
		listItems.not(':first').hide();


		fadeInterval = setInterval(changeList, delayTime);
	}); //jQuery mobile fade function
} // RotateListItems
