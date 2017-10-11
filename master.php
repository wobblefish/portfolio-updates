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
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>
		
		<!-- Include Bootstrap CDN -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
		
		<!-- Include Bootstrap's JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- Include Font Awesome CDN-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
		
		<!-- Include Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700,700i,900" rel="stylesheet">
		
		<link rel="stylesheet" href="/css/styles.css" type="text/css" media="all">
	
		<!--
		This was a custom jQuery script I developed to bring some visual interest to a product promotional page
		List items are highlighted one by one while a corresponding slide image is shown
		-->
		
		<?php 
			if ($mobile) {
				echo '<script type="text/javascript" src="js/slideshow/slideshowMobile.js"></script>';
			} else {
				echo '<script type="text/javascript" src="js/slideshow/slideshowDesktop.js"></script>';
			}
		?>
		
		<link href="css/slideshow.css" rel="stylesheet" type="text/css" />
		
		
		
		
		<!-- Graphics Page Includes -->
		
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
    <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>
    
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
    
    <link rel="stylesheet" href="js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
    <script type="text/javascript">
    	$(document).ready(function() {
    		$(".fancybox").fancybox();
    		
    		$('.fancybox-iframe').load( function() {
    		$('.fancybox-iframe').contents().find("head")
    		.append($("<style type='text/css'>  img{width:100%;}  </style>"));
    		
    	});
    	
    
    	
    </script>
    
    <script type="text/javascript">
      $(document).ready(function() {
           $(".fancybox").fancybox({
      		width    : '100%', 
      		height   : '100%', 
      		autoSize    : false, 
      		closeClick  : false, 
      		fitToView   : true, 
      		autoScale   : true, 
      		openEffect  : 'fade', 
      		closeEffect : 'fade', 
      		type : 'image'
      		});
      });
    </script>
		
	</head>
  <body>
    <?php define("APP_ROOT", $_SERVER['DOCUMENT_ROOT']); ?>
    <div><?php include(APP_ROOT . '/content/navigation.php');?></div>
    <div><?php include(APP_ROOT . '/content/_' . $page_content);?></div>
    <div><?php include(APP_ROOT . '/content/footer.php');?></div>
  </body>
</html>