
<script type="text/javascript">
	$(document).ready(function () {
	  /* global $ */
	  $(".nav-link").removeClass("active");
	  $('#home').addClass('active');
	
			
		// Add slideshow
		$('head').append( $("<script />", {
			type: 'text/javascript',
			src: "/js/slideshow/homeSlideshow.js"
		}));
		
	});
</script>

<div class="container">
	<div class="row">
		<div id="contentLeft" class="col-xs-12 col-md-6 col-lg-6">
			<!--Start the slideshow when image DIV is clicked -->
			<div id="slideshow" class="intro" onmouseup='StartSlideshow()'>
 				<img src="/resources/slideshow/intro.jpg" class="img-responsive" style="visibility: hidden;" />
			</div>

			<ul id="jqueryList">
				<li class="listItem0">Over 5 years of experience of web development in several languages - HTML5 / CSS3 / JavaScript / jQuery / PHP / Ruby On Rails / Python / SQL (MySQL, PostgreSQL, SQL Server) creating or modifying existing code</li>
	
				<li class="listItem1">Skilled with creative process and graphic design, several years experience in front-end development, experienced with Adobe Photoshop - has created logos for several products and design flyers and brochures for print</li>
	
				<li class="listItem2">A creative and analytical mind, excelling at both the programming logic and artistic sides of design process. Loves to learn new skills and grow</li>
	
				<li class="listItem3">Excellent interpersonal skills; enjoys working with development teams to tackle complex problems and brainstorm with a friendly and positive attitude</li>
	
				<li class="listItem4">Strong customer service skills with over 10 years in customer support</li>
	
				<li class="listItem5">Committed to high quality, professional work with attention to detail</li>
			</ul>
			
		</div> <!--contentLeft-->
		
		<div id="contentRight" class="col-xs-12 col-md-6 col-lg-6"></div>
		
	</div>
</div>

<div class="container"style="margin:0; padding:0;">
	<div id="slideshow-mobile-row" class="row" style="margin:0; padding:0;">
		<div class="col-xs-12 col-md-0">
			 <!--On mobile, the list items will be inserted here -->
		</div>
	</div>
</div>