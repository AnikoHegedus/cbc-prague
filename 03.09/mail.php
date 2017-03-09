<?php

require_once "class.phpmailer.php";
require_once "class.smtp.php";
require_once "mail-config.php";

$mail = new PHPMailer();

$mail->SMTPDebug = 3;

// to configure - example from PHPMailer github
$mail->isSMTP();
$mail->Host = $config["server"];            // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = $config["username"];   // SMTP username – created by Michal, we can have our own
$mail->Password = $config["password"];               // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom("sender@sender.org", "Sender");
$mail->addReplyTo("whereiwant@getthemessage.org");
$mail->addAddress("recipient@recepient.org", "Name of Recepient");
$mail->addAddress("recipient2@recepient.org", "Name of Recepient2"); // to call it multiple times
$mail->Subject = "Hi there!";
$mail->Body = "This is the body of the email";

if($mail -> send()){
    echo "sent";
}else{
    echo "not sent";
}