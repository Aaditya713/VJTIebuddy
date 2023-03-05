<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mail = $_POST["mail"];
    $message = $_POST["message"];

    $email_from = "vjtiebuddy.com";

    $email_subject = "New contact form submission";

    $email_body = "User First Name: $fname.\n".
                    "User Last Name: $lname.\n".
                        "User Email: $mail.\n".
                            "User Message: $message.\n";

    
    $to = "vjtiebuddy.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $mail\r\n";
    
    mail($to,$email_subject,$email_body\r\n);

    header("Location: index.html");
?>