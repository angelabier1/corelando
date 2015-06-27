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
		
		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
		<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title">Contact Us</h1>
						
						<ul class="breadcrumb">
							<li><a href="index.php">Home </a></li>
							<li><a href="contacts.php">Contacts</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content contacts">
			<div id="contacts_map"></div>
			
			<script type="text/javascript">
				var singleMarker = [
					{
						"id": 0,
						"title": "Core Real Estate Solutions",
						"latitude": 28.565505,
						"longitude": -81.372967,
						"image": "http://placehold.it/700x603",
						"description": "1600 N. Orange Ave, Suite 201, Orlando, FL 32804 <br> Phone: 407-477-2706",
						"map_marker_icon": "images/markers/turquoise-marker-cozy.png"
					}
				];
				
				(function ($) {
					"use strict";
					
					$(document).ready(function () {
						//Create contacts map. Usage: Cozy.contactsMap(marker_JSON_Object, map canvas, map zoom);
						Cozy.contactsMap(singleMarker, 'contacts_map', 14);
					});
				})(jQuery);
			</script>
			
			<div class="container">
				<div class="row">
				
					<div id="contacts-overlay" class="col-sm-7">
						<i id="contacts-overlay-close" class="fa fa-minus"></i>
						
						<ul class="col-sm-6">
							<li><i class="fa fa-map-marker"></i> 1600 N. Orange Ave, Suite 201 Orlando, FL 32804</li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:info@corelando.com">info@corelando.com</a></li>
						</ul>
						
						<ul class="col-sm-6">
							<li><i class="fa fa-phone"></i> Tel.: 407-477-2706</li>
							<li><i class="fa fa-print"></i> Fax: 407-477-2699</li>
						</ul>
					</div>
					
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-4 col-sm-offset-8">
						<h2 class="section-title">Contact Form</h2>
						<p class="col-sm-12 center">We would love to get in touch with you about your home sale. Contact your Core Real Estate Solutions agent or submit the form below - we look forward to assisting you! <br>
					  </p>
							
<form action="mail.php" method="POST">
<div class="col-sm-12">
<input type="text" name="name" placeholder="Name" class="form-control required fromName">
  <input type="text" name="email" placeholder="Email" class="form-control required fromEmail" >
 <textarea name="message" placeholder="Message" class="form-control required"></textarea></div>
 <div class="center">
  <button type="submit" class="btn btn-default-color btn-lg submit_form"><i class="fa fa-envelope"></i> Send Message</button>
  </div>
</form>
							</div>
	
					<!-- END MAIN CONTENT -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		<?php require_once 'blocks/footer.php'; ?>
	
	</div>
	<!-- END WRAPPER -->

</body>
</html>