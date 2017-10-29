<?php
	define("APP_ROOT", $_SERVER['DOCUMENT_ROOT']);
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Matt McNeil - <?php echo $title; ?></title>
		
		<!-- Include jQuery-->
		<script type="text/javascript" src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		
		<!-- Include Bootstrap CDN -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
		
		<!-- Include Bootstrap's JS -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- Include Bootstrap Tooltips -->
		<!--<script src="//maxcdn.bootstrapcdn.com/twitter-bootstrap/3.3.7/js/bootstrap-tooltip.js" ></script>-->
		
		
		<!-- Include Font Awesome CDN-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
		
		<!-- Include Google Font -->
		<link href="//fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700,700i,900" rel="stylesheet">
		
		<link rel="stylesheet" href="/css/styles.css" type="text/css" media="all">
		
		<!-- Graphics Page Includes -->
		
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/js/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
    <script type="text/javascript" src="/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>
    
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
    
    <link rel="stylesheet" href="/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
    <!-- Load Fancy Box Options for Images -->
    <script type="text/javascript" src="/js/fancy-box-images.js"></script>
    
    		
		<!--
			Below was a custom jQuery script I developed to bring some visual interest to a product promotional page
			List items are highlighted one by one while a corresponding slide image is shown in the desktop version
			
			A different script is inserted conditionally based on the window size
			
			To optimize for mobile, will be showing the image as full width, fading it in along with the text.
			The text will overlay the image. Both will show for a set amount of time and then fade out together
			The next group will then fade in together
		-->
		
		<script type="text/javascript">
			/* global $ */
			
			$( document ).ready(function() {     
				
				// Enable tooltips
				$('[data-toggle="tooltip"]').tooltip({
					trigger : 'hover'
				});
				
			});
			
		</script>
	</head>
  <body>
    <?php include(APP_ROOT . '/content/navigation.php');?>
    <?php include(APP_ROOT . '/content/_' . $page_content);?>
    <?php include(APP_ROOT . '/content/footer.php');?>

	  <!-- Pre-load elements with template -->
    <div class="preload" style="display:none">
    	<img src="/images/graphic-design/Logo1-bretonsmartek.jpg" />
			<img src="/images/graphic-design/Logo2-fireq.jpg" />
			<img src="/images/graphic-design/Logo3-cit.png" />
			<img src="/images/graphic-design/Logo4-ggm.jpg" />
			<img src="/images/graphic-design/businessCard.png" />
			<img src="/images/graphic-design/musicFlyer1.jpg" />
			<img src="/images/graphic-design/musicFlyer2.jpg" />
			<img src="/images/graphic-design/musicFlyer3.jpg" />
    </div>
    
  </body>
</html>