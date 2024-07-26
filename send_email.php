<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $dob = htmlspecialchars($_POST['dob']);
    $email = htmlspecialchars($_POST['email']);
    $reason = htmlspecialchars($_POST['reason']);

    $to = 'grammar12131@gmail.com';
    $subject = "License - $name";
    $message = "Name: $name\nDate of Birth: $dob\nEmail: $email\n\nReason for Applying:\n$reason";
    $headers = 'From: no-reply@yourdomain.com' . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Thank you for your submission. Your application has been sent.';
    } else {
        echo 'Sorry, there was an error sending your application. Please try again later.';
    }
} else {
    echo 'Invalid request method.';
}
?>
