<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate inputs
    if (!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // Email subject
        $email_subject = "Submission Confirmation";
        
        // Email body
        $email_body = "
        Name: $name\n
        Email: $email\n
        Message: $message
        ";

        // Set the "from" address
        $headers = "From: abdumehammed@gmail.com\r\n"; // Ensure this matches the one you configured in sendmail.ini
        $headers .= "Reply-To: $email\r\n";

        // Send email to the user
        if (mail($email, $email_subject, $email_body, $headers)) {
            // Display success message
            echo "Email successfully sent to $email!";
        } else {
            // Display error message if email not sent
            echo "Sorry, there was an error sending your email. Please try again.";
        }

    } else {
        // Display validation error
        echo "Invalid input. Please ensure all fields are filled out correctly.";
    }
}
?>
