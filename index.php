<?php
include 'contactInfo.php';
?>
<!doctype html>
<html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
	
<style>
  .iehighlight { border: none; }
</style>
		
	<title>Matt McNeil - Web Developer Portfolio</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" href="styles/style2.css" type="text/css" media="all">

	<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>

	<!--
	This was a custom jQuery script I developed to bring some visual interest to a product promotional page
	List items are highlighted one by one while a corresponding slide image is shown
	-->	
	
	<script type="text/javascript">
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
    </script>
		
		<link href="styles/slideshow.css" rel="stylesheet" type="text/css" />
	
	</head>
	
	<body>
		<div class="container">
			<div id="wrapper">					
					<div id="content">

						<header>
							<h2>Matt McNeil</h2>
							<h3>Web Development Portfolio</h3>		
						</header>

						<div id="contentLeft">
							
							<ul id="jqueryList">
								<li class="listItem0">Over 5 years of experience of web development in several languages - HTML5 / CSS3 / JavaScript / jQuery / PHP / Ruby On Rails / Python / SQL (MySQL, PostgreSQL, SQL Server) creating or modifying existing code</li>

								<li class="listItem1">Skilled with creative process and graphic design, several years experience in front-end development, experienced with Adobe Photoshop - has created logos for several products and design flyers and brochures for print</li>

								<li class="listItem2">A creative and analytical mind, excelling at both the programming logic and artistic sides of design process. Loves to learn new skills and grow</li>

								<li class="listItem3">Excellent interpersonal skills; enjoys working with development teams to tackle complex problems and brainstorm with a friendly and positive attitude</li>

								<li class="listItem4">Strong customer service skills with over 10 years in customer support</li>

								<li class="listItem5">Committed to high quality, professional work with attention to detail</li>
							</ul>
						</div>
						
						<div id="contentRight">
							<!--Start the slideshow when image DIV is clicked -->
							<div id="newSlideshow" onmouseup='StartSlideshow()'></div>
						</div>
						
						<div class="linkButtonGroup">
							<a target="_blank" href="//www.github.com/wobblefish">	
								<div class="linkButton"> 
									<h3>Code Samples (GitHub)</h3>
								</div>
							</a>	
							<a target="_blank" href="#">	
								<div class="linkButton"> 
									<h3>Unreleased Product Website<br>
										jQuery Forms / Effects + CSS3</h3>
								</div>
							</a>	
							<a target="_blank" href="projects/graphics">	
								<div class="linkButton"> 
									<h3>Logos & <br />Graphic Work</h3>
								</div>
							</a>	
							<!-- <a target="_blank" href="projects/store">	
								<div class="linkButton"> 
									<h3>Inventory Management System<br />(and PHP Store/Shopping Cart)</h3>
								</div>
							</a>
							-->
						</div>
						
					</div>
					<footer class="footer">
						<div>
							<?php
								echo $contactInfo;
							?>
						</div>
					</footer>
			</div>
		</div>
	</body>
</html>