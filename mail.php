<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'hohlov1106@mail.ru';
$mail->Password = 'gfif1106';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('hohlov1106@mail.ru');
$mail->addAddress('ssstesst@yandex.ru');

$mail->isHTML(true);

$mail->Subject = '';
$mail->Body    = 'Нажата кнопка';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: sent.html');
}
?>
