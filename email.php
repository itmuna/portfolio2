<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'mail.mubeendroid.com';
$mail->SMTPAuth = true;
$mail->Username = 'test@mubeendroid.com';
$mail->Password = 'e9;1-ucRXN1k';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('test@mubeendroid.com', 'MubeenDroid'); //sender email
$mail->addAddress('munanusratjahan47@gmail.com'); //recepient email
$mail->isHTML(true);
$mail->Subject = 'Hello world';
$bodyContent = '<h1>Hey there!</h1><p>Hello from MubeenDroid :D</p>';
$mail->Body = $bodyContent;
if($mail->send()) {
    header("Location: contact.php");
exit();
} else {
    echo 'Email not sent. Error: '.$mail->ErrorInfo;
}
?>