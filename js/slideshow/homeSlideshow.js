/* global $, Image */

// On page load the list is hidden and "Click to start slideshow" image is displayed on left
//This flag is updated when the user clicks to start the slideshow
var slideshowStart = 0;
var count = 0;
var mobileDelayTime = 8000;
var delayTime = 4000; //Delay time for change in ms
var fadeInterval,
	HLTimeout,
	uHLTimeout,
	continueLoop;
var footerHeight;

$(document).ready(resizeHeaders);
$(window).on('resize', resizeHeaders);

// $.fn.center = function () {
//     this.css("position","absolute");
//     this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
//                                                 $(window).scrollTop()) + "px") -
//                                                 $('#slideshow img').height();
//     return this;
// }

// $(window).scroll(function() {
// 	$('#slideshow').center();
// });

function resizeHeaders() {

	if ($(window).height() < 300) {
		//Change header for short displays

		// Change the text content and size
		$('.navbar-brand').html("<i class='fa fa-cubes'></i>Matt McNeil <span class='text-small '>Web Development Portfolio<span>");

		$('#slideshow').css({
			'max-height': .2 * $(window).height(),
			'background-size': '400%'
		});
		// .html('<h1 class="text-center ml-1">Click Here To Begin Slideshow</h1>');
		
		footerHeight = $('footer').outerHeight(true);
		
	}
	else {
		//reverse the changes (display fullscreen version)
		$('.navbar-brand').html("<i class='fa fa-cubes'></i>Matt McNeil<br /><span class='text-small '>Web Development Portfolio<span>");

		// Get the currently displayed image and drop it back into the slideshow container
		var currentImage = $('#slideshow').css('background-image');

		// Clean off the url() and full path from URL
		currentImage = currentImage.match('(/resources.+)')[0].replace('url(', '').replace(')', '').replace(/\"/gi, "");
		// console.log("The current image is", currentImage);

		$('#slideshow').css({
			'max-height': '',
			'background-size': '100% auto'
		}).html('<img src="' + currentImage + '" />');
		
		footerHeight = $('footer').outerHeight(true);

	}
}




function showHideFooter() {
	
	console.log(footerHeight);
	
	if ( $('.footer').is(':visible') ) {
		$('footer').slideUp('3000');
		$('.footerButton i').removeClass('fa-arrow-circle-o-down').addClass('fa-arrow-circle-o-up')
		$('.footerButton').animate({'bottom' : '0'}, 800);
	} else {
		$('footer').slideDown('3000');
		$('.footerButton i').removeClass('fa-arrow-circle-o-up').addClass('fa-arrow-circle-o-down')
		$('.footerButton').animate({'bottom' : footerHeight }, 800);
	}
}

$(document).ready(function() {

	function preloadImage(url) {
		var img = new Image();
		img.src = url;
	}
	for (var index = 1; index <= 6; index++) {
		// console.log("loading", '/resources/slideshow/' + index + ".jpg")
		preloadImage('/resources/slideshow/' + index + ".jpg");
	}
	
	$('#showHideFooter').click(function() {
		showHideFooter();
	});
	
}); //document ready


function StartSlideshow() { // Initiated when image DIV is clicked		
	if (slideshowStart == 0) { // Prevent from starting the slideshow again if flag is not set to zero

		slideshowStart = 1; // If not yet started, update the flag and fade out the intro image and begin to show the list
		$('#jqueryList').hide();
		$('#slideshow').fadeOut('slow', function() {
			$('#slideshow').removeClass('intro');
			
			// If window resized and width < 992 hide image

			//Detect window width for mobile or desktop slideshow 
			if ($(window).width() < 768) {
				// $( '#slideshow' ).remove();
				$('#slideshow').empty().css({
					// 'min-height' : '150px',
					'min-height': .5 * $(window).height(),
					'max-height': .6 * $(window).height(),
					'margin-top': '0px'
				});


				// $('footer').animate({margin : '0 0 -95px 0'}, 1500);
				footerHeight = $('footer.footer').outerHeight(true);
				showHideFooter();

				$('#jqueryList').css({
					'margin-top': '-182px',
					'width': '100%',
					'opacity': '0.94'
				});
				$('#jqueryList').appendTo('#slideshow-mobile-row div');
					$('.preload-slideshow').waitForImages(function() {
				    // All descendant images have loaded, now begin
				    RotateListItems();
					});
			}
			else {
				$('#slideshow').css({
					'width': '100%',
					'min-height': $('#contentRight').height,
					'max-height': '444px'
				}).appendTo('#contentRight');
				// check if it's on the right
				// move back if so
				$('.preload-slideshow').waitForImages(function() {
			    // All descendant images have loaded, now begin
			    HighlightList();
				});
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

		RotateImages(index);

		//Make the active item stand out a bit more with some alignment CSS tweaks
		$( listIndex ).css( 'margin-left', '-5px' );

	}

	//Remove all the highlighting changes for the previously active item
	function unHighlight(index) {
		var listIndex = '.listItem' + index;
		$('#contentLeft').find(listIndex).removeClass('iehighlight').removeClass('shadow');
		$(listIndex).css('border', '1px solid black').css('color', '#dddddd').css('background-color', '#222222');

		$( listIndex ).css( 'margin-left', '0px' );


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

		var imgSource = "/resources/slideshow/" + (index + 1) + ".jpg";
		// console.log(imgSource);

		$('#slideshow').empty();
		$('#slideshow').css('background-image', 'url(' + imgSource + ')');
		$('#slideshow').append('<img class="fading-image" src="' + imgSource + '" />');
		$('#slideshow img').attr('src', imgSource);

		// maintain image height for slideshow div
		$('.fading-image').css('visibility', 'hidden');
		// $( '#slideshow' )'background-size', '460px 250px' );
		$('#slideshow').css('background-repeat', 'no-repeat').fadeIn('fast');
		if (index == 0) { $('#contentRight').fadeIn('slow'); }
	});
}

//jQuery Mobile Fade function
function RotateListItems() {
	$('#jqueryList').hide();
	$('#jqueryList li').css({
		'min-height': '5%',
		'padding': '20px',
		'margin-top': '60px'
	});

	RotateImages(0);
	$('#jqueryList li').eq(0).fadeIn();
	$('#jqueryList').show();

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


		fadeInterval = setInterval(changeList, mobileDelayTime);
	}); //jQuery mobile fade function
} // RotateListItems
