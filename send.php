<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                // Disable debug output
            $mail->isSMTP();                                   // Send using SMTP
            $mail->Host       = 'mail.hararmfi.com';           // Your cPanel SMTP server
            $mail->SMTPAuth   = true;                          // Enable SMTP authentication
            $mail->Username   = 'abdumehammed@hararmfi.com';   // Your SMTP username
            $mail->Password   = 'Higher#2234#';                // Your SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   // Enable SSL encryption
            $mail->Port       = 465;                           // SMTP port for SSL

            // Recipients
            $mail->setFrom('abdumehammed@hararmfi.com', 'Harar MFI');
            $mail->addAddress('abdumehammed@gmail.com', 'Recipient Name');
            $mail->addReplyTo('replyto@hararmfi.com', 'Reply-to');


            $mail->addCC('eliyas.yalew@hararmfi.com');
            $mail->addCC('yacobhabtu@hararmfi.com');
            $mail->addCC('yaqob.habtu@hararmfi.com');
            // Email content
            $mail->isHTML(true);                               // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = "Name: $name<br>Email: $email<br>Message:<br><b>$message</b>";
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

            // Send the email
            $mail->send();
            header("Location: contact.php?success=true");
            exit();
        } catch (Exception $e) {
            header("Location: contact.php?success=true");
            exit();
        }
    } else {
        header("Location: contact.php?success=true");
        exit();
    }
}
