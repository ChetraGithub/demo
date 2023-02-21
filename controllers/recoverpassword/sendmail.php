<?php
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

// Include PHPMailer library files 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 

// Create an instance of PHPMailer class 
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'hongchetra12@gmail.com';
$mail->Password = 'rcimzsmbpuzssnzr';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;

// Sender info 
$mail->setFrom('hongchetra12@gmail.com', 'Hong Chetra'); 
$mail->addReplyTo('hongchetra12@gmail.com', 'Hong Chetra'); 
 
// Add a recipient 
$mail->addAddress('hongchetra22@gmail.com'); 
 
// Add cc or bcc  
$mail->addCC('cc@example.com'); 
$mail->addBCC('bcc@example.com'); 
 
// Email subject 
$mail->Subject = 'CAMBO SHOW | Reset Password'; 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Email body content 
$mailContent = "
    <p>Your PIN CODE is <a style='font-width:bold;'>$pinCode</a></p>"; 
$mail->Body = $mailContent; 
 
// Send email 
if(!$mail->send()){ 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
}else{ 
    echo 'Message has been sent.'; 
}