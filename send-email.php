<?php

$name = $_POST["name"];
$email = $_POST["email"];
$betreff = $_POST["betreff"];
$nachricht = $_POST["nachricht"];
$Datenverarbeitung = $_POST["Datenverarbeitung-Einwilligung"];

require_once "./vendor/autoload.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$mail = new PHPMailer(true);

$mail->CharSet = "UTF-8";


$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.ionos.de";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;




$mail->setFrom("kontaktformular@tg-jahn-namedy.de", "Webseite Kontakt");
$mail->addAddress("kontaktformular@tg-jahn-namedy.de", "Webseite Kontakt");
$mail->addReplyTo($email, $name);

$mail->isHTML(true);
$mail->Subject = $betreff;

$inhalt = "Name: " . $name . "<br/>Betreff: " . $betreff . "<br/>E-Mail: " . $email . "<br/>Nachricht: " . $nachricht . "";
$mail->Body = $inhalt;

$mail->send();



header("Location: ./form_send.html#form_send");

