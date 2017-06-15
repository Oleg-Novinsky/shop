<?php
/* Задаем переменные */
$name = "unknown";
$email = "unknown";
$tel = htmlspecialchars($_POST["tel"]);
$website = "unknown";
$message = "unknown";
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "oooleguitar@mail.ru";
$sub = "Заказ звонка";

/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Телефон отправителя: $tel
Сайт отправителя: $website
Текст сообщения:
$message";
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n"; 
if (mail($address, $sub, $mes, $from)) {  
	header('refresh: 5; url=http://shop/');
	echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт XXX';}
else {  
	header('refresh: 5; url=http://shop/');
	echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY';}
}
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>