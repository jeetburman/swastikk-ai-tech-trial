<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$message = $_POST['message'];

$email_from = 'demo@gmail.com';

$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: Message from $name.\n".
               "User Message: $message.\n";
$to = 'jeetburman95@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: CONTACT.html");

?>