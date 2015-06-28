<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<?php require_once 'blocks/head.php'; ?>
</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<?php require_once 'blocks/header.php'; ?>
		
		<?php require_once 'blocks/home-search-hero.php'; ?>
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<div align="center">
					  <!-- BEGIN MAIN CONTENT -->
					  <?php require_once 'blocks/features.php'; ?>
					  <!-- END MAIN CONTENT -->
					  
					  
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
		
		<!-- BEGIN FOOTER -->
		<footer id="footer">
			<div id="footer-top" class="container">
				<div class="row">
					<div class="block col-sm-7" id="footer-info">
						<a href="index.php"><img src="images/logo.png" alt="Core Logo" /></a>
						<br><br>
						<p class="footer-paragraph">Core Real Estate Solutions is a full service residential real estate company serving Orlando, Florida and the surrounding areas. Whether you are searching homes online, considering a purchase or a sale, or just getting to know Orlando area neighborhoods, we’re happy you’re here! Questions? One of our experienced agents would love to hear from you!
</p>
					</div>
          
					<div class="block col-sm-5" id="contact-info">
						<h3 id="contact-info-header">Contact Info</h3>
						<ul class="footer-contacts">
							<li><i class="fa fa-map-marker"></i> 1600 N. Orange Ave Suite 201, Orlando, FL 32804</li>
							<li><i class="fa fa-phone"></i> 407-477-2706</li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:info@corelando.com">info@corelando.com</a></li>
						</ul>
					</div>
					
					
				</div>
			</div>
			
			
			<!-- BEGIN COPYRIGHT -->
			<div id="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
            <?php date_default_timezone_set('UTC'); ?>
							&copy; <?php echo date("Y"); ?> Core Real Estate Solutions, Inc. All rights reserved. 
							
							
						
						</div>
					</div>
				</div>
			</div>
			<!-- END COPYRIGHT -->
			
		</footer>
		<!-- END FOOTER -->
	
	</div>
	<!-- END WRAPPER -->

</body>
</html>