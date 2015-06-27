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
										
							<div class="col-sm-12">
								<script src="http://max.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="http://max.jotfor.ms/static/jotform.forms.js?3.2.4413" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      $('input_1').hint(' Name');
      $('input_2').hint(' E-mail');
      JotForm.setCustomHint( 'input_3', 'Message' );
      JotForm.highlightInputs = false;
      JotForm.alterTexts({"alphabetic":"This field can only contain letters","alphanumeric":"This field can only contain letters and numbers.","confirmClearForm":"Are you sure you want to clear the form","confirmEmail":"E-mail does not match","email":"Enter a valid e-mail address","incompleteFields":"Please complete required (*) fields.","lessThan":"Your score should be less than","numeric":"This field can only contain numeric values","pleaseWait":"Please wait...","required":"This field is required.","uploadExtensions":"You can only upload following files:","uploadFilesize":"File size cannot be bigger than:"});
   });
</script>
<link href="http://max.jotfor.ms/static/formCss.css?3.2.4413" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="http://max.jotfor.ms/css/printForm.css?3.2.4413" />
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    .form-all{
        width:364px;
        color:#555 !important;
        font-family:'Verdana';
        font-size:12px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-all{
background:url('http://cms.interlogy.com/uploads/image_upload/image_upload/global/6981_bg.png') no-repeat;
height: 387px;
margin-top:5px;
}
.form-label-left, .form-label-top {
display:none;
}
.form-textbox {
margin-left: 32px;
margin-top: 8px;
height: 24px;
border: none;
background: transparent;
outline: none;
width: 258px;
font-size: 15px;
font-family: verdana;
color: #5388A5;
padding:2px 10px;
}
#id_2{
margin-top: -5px !important;
}

.form-textarea{
margin-left: 32px !important;
margin-top: 1px !important;
width: 257px !important;
height: 137px !important;
max-width: 257px !important;
max-height: 137px !important;
font-size: 15px !important;
font-family: verdana !important;
outline: none !important;
border: none!important;
background: transparent !important;
color: #5388A5;
padding:2px 10px;
}
.form-buttons-wrapper{
margin-right:35px;
}
.form-button-error{
display:block;
}
/*--remove error message--*/
.form-error-message {display: none !important;}
.form-line-error {
background:none repeat scroll 0 0;
}
.form-validation-error {
-moz-box-shadow: 0 0 12px #FAC9BC;
-webkit-box-shadow: 0 0 12px #FAC9BC;
box-shadow: none !important;
border-radius: 1px !important;
-webkit-border-radius: 1px;
-moz-border-radius: 2px;
border:1px solid #FAC9BC !important;
}
.form-button-error p {
margin-top: -11px;
font-size: 11px;
font-family: arial;
}
.form-submit-button{
	outline:none;
}
    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="http://jotform.us/css/styles/buttons/form-submit-button-simple_white.css?3.2.4413"/>
<form class="jotform-form" action="http://submit.jotform.us/submit/43254353936155/" method="post" name="form_43254353936155" id="43254353936155" accept-charset="utf-8">
  <input type="hidden" name="formID" value="43254353936155" />
  <div class="form-all">
    <ul class="form-section">
      <li class="form-line" data-type="control_textbox" id="id_1">
        <label class="form-label form-label-left" id="label_1" for="input_1">
          Click to edit
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_1" class="form-input">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_1" name="q1_clickTo" size="40" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_2">
        <label class="form-label form-label-left" id="label_2" for="input_2">
          Click to edit
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_2" class="form-input">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_2" name="q2_clickTo2" size="40" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3">
          Click to edit
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input">
          <textarea id="input_3" class="form-textarea validate[required]" name="q3_clickTo3" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_4">
        <div id="cid_4" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_4" type="submit" class="form-submit-button form-submit-button-img form-submit-button-simple_white">
              <img src="http://cms.interlogy.com/uploads/image_upload/image_upload/global/6980_button.png" alt="Submit" />
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="43254353936155" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "43254353936155-43254353936155";
  </script>
</form>
							</div>
						
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