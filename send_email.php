<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Recipient email address
$to = "nosborn2003@gmail.com"; // Replace with your email address

// Subject of the email
$subject = "Form Submission";

// Email message
$email_message = "Name: " . $name . "\n";
$email_message .= "Email: " . $email . "\n";
$email_message .= "Message: " . $message . "\n";

// Additional headers
$headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// Send the email
if (mail($to, $subject, $email_message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
