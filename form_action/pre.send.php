<?php

require 'class.phpmailer.php';
require 'class.smtp.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'iura.det';
$mail->Password = 'xx';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('iura.det@yandex.ru');
$mail->addAddress('9119113142@mail.ru');

