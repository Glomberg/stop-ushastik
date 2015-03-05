<?php
if (isset($_POST['tovar'])) {$tovar = $_POST['tovar'];}
if (isset($_POST['value'])) {$value = $_POST['value'];}
if (isset($_POST['fio'])) {$fio = $_POST['fio'];}
if (isset($_POST['adress'])) {$adress = $_POST['adress'];}
if (isset($_POST['telefon'])) {$tlf = $_POST['telefon'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['city'])) {$city = $_POST['city'];}
	if ($city == 0) {
		$city = "Город не указан";
	} else if ($city == 1) {
		$city = "Казань";
	}
if (isset($_POST['dostavka'])) {$dostavka = $_POST['dostavka'];}
if (isset($_POST['oplata'])) {$oplata = $_POST['oplata'];}
	
	$to = "440807@mail.ru";
	$headers = "Content-type: text/plain; charset =utf-8";
	$subject = "Ответ сайта [ЗАЯВКА]";
	$message = "Товар - $tovar
				Количество - $value
				Заказчик - $fio
				Адрес - $adress
				Телефон - $telefon
				Эл. почта - $email
				Город - $city
				Доставка - $dostavka
				Оплата - $oplata";
	$send = mail($to, $subject, $message, $headers);
	if ($send == 'true'){
		if($oplata == "nal") {
			echo ("Спасибо. Ваш заказ отправлен. <br>В ближайшее время с Вами свяжется наш специалист.");
		} else {
			echo ("Спасибо за заказ. <br>В ближайшее время с Вами свяжется наш специалист.");
		}
	} else {
		echo "<p><b>Ошибка. Сообщение не отправлено!";
	}
?>