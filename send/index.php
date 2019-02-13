<?php

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$other = $_POST['other'];

	$to      = 'dmntr@rambler.ru';
	$subject = 'Обращение на JPPV';
	$message = 'Имя: ' . $name . '<br>Тел: ' . $phone . '<br>Email: ' . $email . '<br>Коммент: ' . $other;
	$headers = 'From: ' . $email . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	echo "<h1>Ваше обращение успещно отправлено!</h1>";
?>