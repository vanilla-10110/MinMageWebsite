<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer autoload file

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.ventraip.com.au'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'vanilla@minmage.games'; //SMTP username
    $mail->Password = 'BungusPromotesC3llRepair'; //SMTP password
    $mail->SMTPSecure = 'tls'; //Enable TLS encryption
    $mail->Port = 587; //TCP port to connect to

    //Recipients
    $mail->setFrom('vanilla@minmage.games', 'Vanilla');
    $mail->addAddress('vanilla@minmage.games', 'Vanilla'); //Add a recipient

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
