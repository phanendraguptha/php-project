<?php
session_start();
$email = $_POST["email"];
$email = (string) $email;
$otpSent = rand(999, 99999);
$_SESSION["email"] = $email;
$_SESSION['otp'] = $otpSent;

use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
$mail = new phpMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'www.phani122@gmail.com';
$mail->Password = '';
$mail->SetFrom('no-reply@traveltourism.com');
$mail->Subject = 'password recovery';
$mail->Body = $otpSent;
$mail->AddAddress($email);
// $mail->Send();
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  // echo "Message has been sent";
  
  header("Location: forget-handler.php");
}
?>