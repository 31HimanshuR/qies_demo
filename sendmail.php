<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "himanshuraghav029@gmail.com";   // CHANGE THIS
    $headers = "From: $email";

    $fullMessage = "Name: $name\n";
    $fullMessage .= "Email: $email\n\n";
    $fullMessage .= "Message:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<h2>Message Sent Successfully!</h2>";
    } else {
        echo "<h2>Message Failed to Send.</h2>";
    }

}
?>
