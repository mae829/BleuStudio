<? if($_POST['form-name'] AND "contact" === $_POST['form-name']) {
         require_once(TEMPLATEPATH. '/inc/contact-form-functions.php');
	 send_message();
     }
?>
