<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';
require_once 'config/constants.php';


function emailEvergreenSigns($name, $email, $tel, $message) {

  $mail = new PHPMailer(true);

  try {
      
    mail_config(); 

    //Recipients
    $mail->setFrom('donotreply@evergreensigns.com', 'Evergreen Signs');
    $mail->addAddress('evergreensigns@yahoo.com');     // Add a recipient
    // $mail->addAddress('robert@evergreenwebdesign.com'); // testing
    $mail->addReplyTo($email, $name);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('robert@evergreenwebdesign.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'E-mail from EvergreenSigns.com';
    $mail->Body    =  'Name: ' . $name . '<br>Email: ' . $email . '<br>Phone: ' . $tel . '<br><br><hr><br>' . nl2br($message);
    $mail->AltBody =  'Name: ' . $name . '<br>Email: ' . $email . '<br>Phone: ' . $tel . '<br><br><hr><br>' . nl2br($message); 

  $mail->send();

  } catch (Exception $e) {
    echo "Email verification ran into a server error. This is no bueno and brings shame to my family. If you are so inclined, please copy and paste this message into an email to: ewdbob@gmail.com -- Mailer Error: {$mail->ErrorInfo}";
  }
}