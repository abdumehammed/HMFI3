<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Include the necessary PHPMailer files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if the reCAPTCHA response is set and not empty
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    // IMPORTANT: Replace this with your own reCAPTCHA secret key from the Admin Console
    $secretkey = 'YOUR_SECRET_KEY';

    // Verify the reCAPTCHA response with Google's API
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=" . $_POST['g-recaptcha-response']);
    $response = json_decode($verifyResponse);

    // If reCAPTCHA verification is successful
    if ($response->success) {
        // Check if the form was submitted via POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize and retrieve form data
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $subject = htmlspecialchars(trim($_POST['subject']));
            $message = htmlspecialchars(trim($_POST['message']));

            // Proceed only if essential fields are not empty
            if (!empty($name) && !empty($email) && !empty($message)) {
                $mail = new PHPMailer(true);

                try {
                    // Server settings for PHPMailer
                    $mail->SMTPDebug = SMTP::DEBUG_OFF;             // Disable verbose debug output
                    $mail->isSMTP();                                // Send using SMTP
                    $mail->Host       = 'mail.hararmfi.com';        // Your cPanel SMTP server
                    $mail->SMTPAuth   = true;                       // Enable SMTP authentication
                    $mail->Username   = 'abdumehammed@hararmfi.com'; // Your SMTP username
                    $mail->Password   = 'Higher#2234#';             // Your SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable SSL encryption
                    $mail->Port       = 465;                        // SMTP port for SSL

                    // Recipients
                    $mail->setFrom('abdumehammed@hararmfi.com', 'Harar MFI');
                    $mail->addAddress('abdumehammed@gmail.com', 'Recipient Name');
                    $mail->addReplyTo('replyto@hararmfi.com', 'Reply-to');
                    $mail->addCC('eliyas.yalew@hararmfi.com');

                    // Email content
                    $mail->isHTML(true);                             // Set email format to HTML
                    $mail->Subject = $subject;
                    $mail->Body    = "Name: $name<br>Email: $email<br>Message:<br><b>$message</b>";
                    $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

                    // Send the email
                    $mail->send();
                    // Redirect on success
                    header("Location: contact.php?success=true");
                    exit();
                } catch (Exception $e) {
                    // Redirect on error. You might want to handle this differently
                    header("Location: contact.php?success=true");
                    exit();
                }
            } else {
                // Redirect if required form fields are empty
                header("Location: contact.php?success=true");
                exit();
            }
        }
    } else {
        // Redirect if reCAPTCHA verification failed
        header("Location: contact.php?success=true");
        exit();
    }
} else {
    // Redirect if no reCAPTCHA response was received
    header("Location: contact.php?success=true");
    exit();
}
