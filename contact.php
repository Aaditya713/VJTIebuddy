<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  // Validate the data
  if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo "Please fill in all fields.";
    exit;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Invalid email format.";
    exit;
  }

  // Send the email
  $to = "vjtiebuddy@gmail.com";
  $subject = "New message from contact form";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";

  if (mail($to, $subject, $body, $headers)) {
    http_response_code(200);
    echo "Thank you for your message!";
  } else {
    http_response_code(500);
    echo "Oops! Something went wrong and we couldn't send your message.";
  }

} else {
  // Not a POST request, so return a 405 error
  http_response_code(405);
  echo "Method not allowed.";
  exit;
}

?>
