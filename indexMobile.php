<?php
	include 'contactInfo.php';
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Matt McNeil - Web Developer Portfolio</title>
		
		<!-- Include jQuery-->
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>
		
		<!-- Include Bootstrap CDN -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
		
		<!-- Include Bootstrap's JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- Include Font Awesome CDN-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
		
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
	
		<!--
		This was a custom jQuery script I developed to bring some visual interest to a product promotional page
		List items are highlighted one by one while a corresponding slide image is shown
		-->	
		<script type="text/javascript">
			/* global $ */
			
			// On page load the list is hidden and "Click to start slideshow" image is displayed on left
			//This flag is updated when the user clicks to start the slideshow
			var slideshowStart = 0; 
			
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
				var count = 0; //
	  	  var delayTime=4000; //Delay time for change in ms
				var listSize = ( $('#jqueryList li').size() -1 ) ;
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
				
			} // HighlightList
							
				
				
				
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
				
				
			// }
	  </script>
		<!--<script type="text/javascript" src="js/slideshow/slideshow.js"></script>-->
		<link href="css/slideshow.css" rel="stylesheet" type="text/css" />
		
	</head>
	<body>
		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class='container'>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <i class="fa fa-code"></i>
            Matt McNeil<br />
						<span class="text-small">Web Development Portfolio<span>
					</a>
        </div>
        
        <div class="collapse navbar-collapse" id="main-nav-collapse">
          
          <!--<div class="nav navbar-nav navbar-right">-->
          <!--  <% if user_signed_in? %>-->
          <!--    <%= link_to "Logout", destroy_user_session_path, method: :delete, class: "btn btn-default navbar-btn" %>-->
          <!--  <% else %>-->
          <!--    <%= link_to "Login", new_user_session_path, class: "btn btn-default navbar-btn" %>-->
          <!--  <% end %>-->
          <!--</div>-->
            
          
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a></li>-->
						<li><a class="nav-item nav-link" href="//www.github.com/wobblefish">Code Samples</a></li>
						<li><a class="nav-item nav-link" href="projects/graphics">Graphics & UI</a></li>
						<!--<li><a class="nav-item nav-link disabled" href="#">Disabled</a></li>-->
          </ul>
        </div><!-- /.navbar-collapse -->
        
      </div>
    </nav>
		
		
		
		
		<div class="container">
			<div class="row">
				<div id="contentLeft" class="col-xs-8">
					<!--Start the slideshow when image DIV is clicked -->
					<div id="slideshow" onmouseup='StartSlideshow()'></div>
					<ul id="jqueryList">
						<li class="listItem0">Over 5 years of experience of web development in several languages - HTML5 / CSS3 / JavaScript / jQuery / PHP / Ruby On Rails / Python / SQL (MySQL, PostgreSQL, SQL Server) creating or modifying existing code</li>

						<li class="listItem1">Skilled with creative process and graphic design, several years experience in front-end development, experienced with Adobe Photoshop - has created logos for several products and design flyers and brochures for print</li>

						<li class="listItem2">A creative and analytical mind, excelling at both the programming logic and artistic sides of design process. Loves to learn new skills and grow</li>

						<li class="listItem3">Excellent interpersonal skills; enjoys working with development teams to tackle complex problems and brainstorm with a friendly and positive attitude</li>

						<li class="listItem4">Strong customer service skills with over 10 years in customer support</li>

						<li class="listItem5">Committed to high quality, professional work with attention to detail</li>
					</ul>
				</div>
				
				<div id="contentRight" class="col-xs-4"></div>
				
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<?php
					echo $contactInfo;
				?>
			</div>
		</footer>
	</body>
</html>