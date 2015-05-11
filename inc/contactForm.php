<?php
	session_start();

	if(isset($GLOBALS["mail_message"])) {
 		echo "<p>".$GLOBALS["mail_message"]."</p>";
	}

	if(isset($_SESSION["mail_message"])) {
 		echo "<p>".$_SESSION["mail_message"]."</p>";
		unset($_SESSION["mail_message"]);
	}
?>
<?php require_once(TEMPLATEPATH. '/inc/contact-form-test.php'); ?>
<form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<input type="hidden" name="form-name" value="contact" />
<div style="text-align:left; border: 1px solid #bbb; padding:10px;">
	<div>
		<label for="name">name</label>
		<input type="text" name="name" id="name" />
	</div>
	<div>
		<label for="email">email</label>
		<input type="text" name="email" id="email" />
	</div>
	<div>
		<label for="message">message</label>
		<textarea name="message" id="message" style="width:250px; height:100px"></textarea>
	</div>
	<input type="submit" value="go" />
</div>
</form>
