<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$message = $_POST["message"];

$to = "wja36rus@yandex.ru";
$from = "wja36rus@yandex.ru";
$subject = "Сообщение с сайта";
	
$mail_to_myemail = "Здравствуйте!
Данные отправленные через форму на сайте:
--
Имя: {$name}
Телефон: {$tel}
Почта: {$mail}
Сообщение: {$message}
--";
	
$headers = "From: $from \r\n";
	
if(mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8')) {
    echo "success";
} else {
    echo "error";
}
