<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="format-detection" content="telephone=no">
	<title><?php wp_title('', true, 'right'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/css-reset.css" />
	<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/styles.css" />
	<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/js/script.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<!--МОДАЛЬНОЕ ОКНО ОФОРМЛЕНИЕ ЗАКАЗА-->
<div id="modal">
	<div class="modal-inner">
		<form action="" method="POST" id="modal-zakaz">
		<span class="close-button"></span>
		<span class="modal-zakaz-line"></span>
		<p>ОФОРМЛЕНИЕ ЗАКАЗА</p>
		<div class="vibor">
			<span>Выбор товара:</span><br>
			<input type="radio" name="vibor" id="radio-detskiy" />
				<label for="radio-detskiy">детский</label>
			<input type="radio" name="vibor" id="radio-vzrosliy" />
				<label for="radio-vzrosliy">взрослый</label>
			<br>
			<span>Кол-во:</span><input type="text" name="number" id="number" /><span>шт.</span>
			<br>
			<span>Сумма:&nbsp </span><span class="sum">2280 руб.</span>
		</div>
		<div class="opisanie detskiy">
			<a href="#">Описание</a>
		</div>
		<div class="opisanie vzrosliy">
			<a href="#">Описание</a>
		</div>
		<div class="clear"></div>
		<label for="fio">ФИО:</label>
			<input type="text" name="fio" id="fio" required />
		<label for="adress">Адрес:</label>
			<input type="text" name="adress" id="adress" required />
		<label for="telefon">Телефон:</label>
			<input type="text" name="telefon" id="telefon" required />
		<label for="e-mail">E-mail:</label>
			<input type="text" name="e-mail" id="e-mail" required />
		<label for="city">Город:</label>
			<input type="text" name="city" id="city" required />
		<input type="radio" name="dostavka" id="dostavka-kurier" />
			<label class="inline" for="dostavka-kurier">Курьер: +200 руб. за 1 день</label>
		<input type="radio" name="dostavka" id="dostavka-samovivoz" />
			<label class="inline" for="dostavka-samovivoz">Забрать самому по адресу: ул. Марковникова, 54</label>
		<div class="sposob-oplati">Способ оплаты:</div>
		<input type="radio" name="oplata" id="oplata-nal" />
			<label class="inline" for="oplata-nal">Наличными при получении</label>
		<input type="radio" name="oplata" id="oplata-karta" />
			<label class="inline" for="oplata-karta">Картой</label>
		<a href="javascript:void(0)" id="modal-zakaz-submit">ОФОРМИТЬ</a>
		</form>
	</div>
</div>
<!--ШАПКА САЙТА-->
<div class="top">
	<header>
		<div class="logo"></div>
		<div class="slogan">
			<p>Стопушастик.ru только оригинальная и качественная<br />продукция из Испании</p>
		</div>
		<div class="socials">
			<p>мы в соцсети:</p>
			<a class="vk" href="#"></a>
			<a class="mail" href="#"></a>
			<a class="ya" href="#"></a>
			<a class="pen" href="#"></a>
			<a class="od" href="#"></a>
		</div>
		<nav>
			<ul>
				<li><a class="active" href="http://stop-ushastik.ru"><span class="menu-icon"></span>ЛОПОУХОСТЬ</a><span class="razdelitel"></span></li>
				<li class="upper-text"><a href="http://stop-ushastik.ru/korrektor/"><span class="menu-icon"></span>КОРРЕКТОР УШЕЙ</a><span class="razdelitel"></span></li>
				<li><a href="#"><span class="menu-icon"></span>ИССЛЕДОВАНИЯ</a><span class="razdelitel"></span></li>
				<li><a href="#"><span class="menu-icon"></span>ВОПРОСЫ</a><span class="razdelitel"></span></li>
				<li><a href="#"><span class="menu-icon"></span>ОТЗЫВЫ</a><span class="razdelitel red"></span></li>
				<li id="modal-zakaz"><a href="javascript:void(0)">ОФОРМИТЬ ЗАКАЗ</a></li>
			</ul>
		</nav>
	</header>
</div>
<!--КОНТЕНТ - СЛАЙДЕР-->
<div class="main">
	<section class="top-of-content">
		<div class="slide2"></div>
		<div class="slide1"></div>
		<div class="slider-right">
			<span>ЗАЯВКА</span>
			<form action="#" method="POST" id="slider-form">
				<p>Заполните и отправьте заявку для бесплатной связи с нашим специалистом</p>
				<label for="tlf">Номер телефона:</label>
				<input type="text" id="tlf" name="tlf" />
				<label for="msg">Ваше сообщение:</label>
				<textarea form="slider-form" id="msg" name="message" ></textarea>
				<a href="#">Отправить</a>
				<div class="clear"></div>
			</form>
			<div class="telefoni">
				<p>8 (495)  &nbsp&nbsp<span>374-71-86</span> (Мск)</p>
				<p>8 (812) <span>643-20-547</span> (СПб)</p>
				<p>8 (800)  &nbsp&nbsp<span>500-51-86</span> (РФ)</p>
			</div>
			<div class="email">
				<p><span>e-mail:</span> <br>stop-ushastik@mail.ru</p>
			</div>
		</div>
		<div class="plashka"></div>
	</section>
</div>