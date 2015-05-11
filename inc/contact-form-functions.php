<?php
function send_message()
{
	$subject = "Test email form Wordpress";
	$body = $_POST['message'];
	$recipient = "mae829@gmail.com";

	$success = @wp_mail($recipient, $subject, $body);

	if($success) {
		session_start();
 		$_SESSION["mail_message"] = "Thank you. your message has been sent.";
		header( 'Location:  '.$_SERVER['HTTP_REFERER'] ) ;
	}
	else {
		$GLOBALS["mail_message"] = "Euston, we have a problem.";
	}
}
?>
