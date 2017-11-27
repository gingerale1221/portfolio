<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Personal Website Contact Form'; 
		$to = 'hvnguyen.jr@gmail.com'; 
		$subject = 'Message from Personal Website Contact Form';
		 
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	}
?>