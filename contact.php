<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Add your email address here where you want to receive the contact form submissions
    $to = "urjaswibanerjee@example.com";

    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    // Send the email
    mail($to, $subject, $body);

    // Redirect back to the contact form after submission
    header("Location: contact.html");
    exit();
}
?>