<?php

$name = $_POST["name"];
$email = $_POST["email"];
$betreff = $_POST["betreff"];
$nachricht = $_POST["nachricht"];
$Datenverarbeitung = $_POST["Datenverarbeitung-Einwilligung"];

require "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->HOST = "	smtp.ionos.de";
$mial->SMTPSecure = "PHPMailer::ENCRYPTION_STARTTLS";
$mail->Port = 587;

$mail->Username = "kontaktformular@tg-jahn-namedy.de";
$mail->Password = "xZ4APx3Jv8QXmuB";

$mail->setForm($email, $name);
$mail->addAddress("kontaktformular@tg-jahn-namedy.de");

$mail->Subject = $betreff;
$mail->Body = $nachricht;

$mail->send();

header("Location: sent.html");

?>