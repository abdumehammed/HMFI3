<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$smtp = new PHPMailer\PHPMailer\SMTP();

echo 'PHPMailer and SMTP loaded successfully';
?>
