 <?php
	error_reporting(E_NOTICE);
	function valid_email($str){
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}
	
	if($_POST['name']!='' && $_POST['email']!='' && valid_email($_POST['email'])==TRUE && strlen($_POST['comment'])>1){
		$to = "mikee@bleucellar.com";
		$headers =
			'From: '.$_POST['email'].''. "\r\n" .
			'Reply-To: '.$_POST['email'].'' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
		$subject = $_POST['subject'];
		$message = htmlspecialchars($_POST['comment']);
		
		if(mail($to, $subject, $message, $headers)){
			echo 1; //SUCCESS
		}
		else{
			echo 2; //FAILURE - server failure
		}
	}
	else{
		echo 3; //FAILURE - not valid email
	}

?>
