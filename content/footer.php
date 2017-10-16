<?php
	include(APP_ROOT . '/content/contactInfo.php');
	$mobile = True;
?>


<div class="container">
	<div class="footerButton">
		<button id="showHideFooter" type="button" class="btn btn-link"><i class="fa"></i></button>	
	</div>
	<footer class="footer">
		<div class="row">
			<div class="col-xs-12">
				
				<?php
					echo $contactInfo;
				?>
			</div>
		</div>
	</footer>
</div>
