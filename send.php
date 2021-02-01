<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$name = htmlspecialchars($name);
	$phone = htmlspecialchars($phone);
	$email = htmlspecialchars($email);

	$name = urldecode($name);
	$phone = urldecode($phone);
	$email = urldecode($email);
	
	$name = trim($name);
	$phone = trim($phone);
	$email = trim($email);

	$message = 'Имя: '.$name."\n".'Телефон: '.$phone."\n".'Почта: '.$email;

	if (mail("rikonvald@gmail.com", 'Заказ', $message)){
	    echo "сообщение успешно отправлено";
	} else {
	    echo "при отправке сообщения возникли ошибки";
	}



?>