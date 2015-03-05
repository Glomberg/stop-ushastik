<?php
if (isset($_POST['obratniy-name'])) {$tovar = $_POST['obratniy-name'];}
if (isset($_POST['tlf'])) {$tovar = $_POST['tlf'];}
if (isset($_POST['msg'])) {$value = $_POST['msg'];}
	$to = "440807@mail.ru";
	$headers = "Content-type: text/plain; charset =utf-8";
	$subject = "Ответ сайта [ОБРАТНЫЙ ЗВОНОК]";
	$message = "Имя - $obratniy-name
				Телефон - $tlf
				Сообщение - $msg";
	$send = mail($to, $subject, $message, $headers);
	if ($send == 'true'){
		echo ("Спасибо за заявку.<br>Наш сотрудник <br>свяжется с Вами.");
	} else {
		echo "<p><b>Ошибка. Сообщение не отправлено!";
	}
?>