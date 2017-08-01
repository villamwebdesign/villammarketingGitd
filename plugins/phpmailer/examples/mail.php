<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
//Set who the message is to be sent from
$mail->setFrom($_POST['email'], $_POST['name']);
//Set an alternative reply-to address
$mail->addReplyTo('info@villamwebdesign.xyz', 'Villám marketing');
//Set who the message is to be sent to
$mail->addAddress('info@villamwebdesign.xyz', 'Villám Marketing');
//Set the subject line
$mail->Subject = 'Ajánlatkérés VillamMarketing.com-ról';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($_POST['message']);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
  session_start();
    $_SESSION["result"] = "Hiba: " . $mail->ErrorInfo;
    header('location: ../../../index.php');
} else {
  session_start();
  $_SESSION["result"] = "Üzenet sikeresen elküldve!";
  header('location: ../../../index.php');
}
