<?php
if (isset($_POST['tovar'])) {$tovar = $_POST['tovar'];}
if (isset($_POST['value'])) {$value = $_POST['value'];}
if (isset($_POST['fio'])) {$fio = $_POST['fio'];}
if (isset($_POST['adress'])) {$adress = $_POST['adress'];}
if (isset($_POST['tlf'])) {$tlf = $_POST['tlf'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['city'])) {$city = $_POST['city'];}
if (isset($_POST['dostavka'])) {$dostavka = $_POST['dostavka'];}
if (isset($_POST['oplata'])) {$oplata = $_POST['oplata'];}
	echo ("$tovar<br>$value<br>$fio<br>$adress<br>$tlf<br>$email<br>$city<br>$dostavka<br>$oplata");
?>