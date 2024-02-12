<?php
$email = $_POST["email"];
$objet = $_POST["object"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
//Recipients
$mail->setFrom('from@example.com', 'Mailer');
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');

