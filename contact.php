<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fname"];
    $email = $_POST["mail"];
    $message = $_POST["message"];

    // send email
    $to = "vjtiebuddy@gmail.com";
    $subject = "New form submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: webmaster@example.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
