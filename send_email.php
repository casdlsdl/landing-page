<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = "New Message from Your Website";
    $message = "You have received a new message from: $email";

    // Optional: Additional message content or other form data
    // $message .= " Message: " . $_POST['message'];

    // Send email to your email address
    $to = "your-email@example.com"; // Replace with your actual email
    $headers = "From: no-reply@yourdomain.com"; // Replace with a valid sender email address

    // Validate email format before sending
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Invalid email format.";
    }
}
?>