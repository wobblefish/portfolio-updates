<?php
	include(APP_ROOT . '/content/contactInfo.php');
	$mobile = True;
?>


<div class="container">
	<div class="footerButton text-center">
		<button id="showHideFooter" type="button" class="btn btn-link"><i class="fa"></i></button>	
	</div>
	<footer class="footer">
		<div class="row">
			<div class="col-xs-10">
				
				<?php
					echo $contactInfo;
				?>
			</div>
			<div class="col-xs-2">
				<div class="footerLinks">
					<a href="//linkedin.com/in/matt-mcneil-1b356059/" data-toggle="tooltip" data-placement="top" title="LinkedIn Profile">
						<i class="fa fa-linkedin-square" style="font-size:36px"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
</div>
