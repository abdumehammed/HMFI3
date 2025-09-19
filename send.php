<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug  = SMTP::DEBUG_OFF;                       // Disable debug output
            $mail->isSMTP();                                           // Send using SMTP
            $mail->Host        = '213.55.96.132';                  // SMTP server
            $mail->SMTPAuth    = true;                                 // Enable SMTP authentication
            $mail->Username    = 'contactcenter@hararmfi.com.et';      // SMTP username
            $mail->Password    = 'test@987';        // SMTP password
            $mail->SMTPSecure  = PHPMailer::ENCRYPTION_SMTPS;          // Enable SSL encryption
            $mail->Port        = 465;                                  // SSL port

            // Recipients
            $mail->setFrom('contactcenter@hararmfi.com.et', 'Harar MFI Contact Center');
            $mail->addAddress('abdumehammed@gmail.com', 'Recipient Name'); 
            $mail->addReplyTo($email, $name);  // So replies go to the user

            // Add CCs if needed
            $mail->addCC('eliyas.yalew@hararmfi.com');
            $mail->addCC('yacobhabtu@hararmfi.com');
            $mail->addCC('yaqob.habtu@hararmfi.com');

            // Email content
            $mail->isHTML(true);  
            $mail->Subject = $subject;
            $mail->Body    = "
                <h3>New Contact Form Submission</h3>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong><br>$message</p>
            ";
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

            // Send email
            $mail->send();
            header("Location: contact.php?success=true");
            exit();
        } catch (Exception $e) {
            // Redirect with failure
            header("Location: contact.php?success=false&error=" . urlencode($mail->ErrorInfo));
            exit();
        }
    } else {
        // Missing fields
        header("Location: contact.php?success=false&error=missing_fields");
        exit();
    }
}
