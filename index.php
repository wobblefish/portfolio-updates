<?php
	include 'contactInfo.php';
	$mobile = True;
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
		
		<?php 
			if ($mobile) {
				echo '<script type="text/javascript" src="js/slideshow/slideshowMobile.js"></script>';
			} else {
				echo '<script type="text/javascript" src="js/slideshow/slideshowDesktop.js"></script>';
			}
		?>
		
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