<?php
if( isset($_POST['fn']) && isset($_POST['em']) && isset($_POST['ms']) ){
	$fn = $_POST['fn'];
	$em = $_POST['em'];
	$ms = nl2br($_POST['ms']);
	$to = "me@abdulkreem.com";	
	$from = $em;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$fn.' <br><b>Email:</b> '.$em.' <p>'.$ms.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>