<?php require_once 'recaptchalib.php';$privatekey = "xxxxxxxxxxxxxxxxxxxxx_xxxxxxxxxxx"; // Insert your reCaptcha private keyfunction returnResult($status, $message){	$result = array(		'status' => $status,		'message' => $message	);	echo json_encode($result);	exit();}$resp = recaptcha_check_answer($privatekey,							$_SERVER["REMOTE_ADDR"],							$_POST["challenge"],							$_POST["captcha"]);if (!$resp->is_valid){	$status = 0;	$message = "Captcha is not correct";	returnResult($status, $message);} else {	$status = 1;	$message = "Captcha is correct";	returnResult($status, $message);}?>