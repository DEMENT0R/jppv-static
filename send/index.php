<?php
	$to      = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$from    = $_POST['from'];

	// $to      = 'dmntr@rambler.ru';
	// $subject = 'the subject';
	// $message = 'hello';
	$headers = 'From: ' . $from . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	echo "<h1>Ваше обращение успещно отправлено!</h1>";
?>