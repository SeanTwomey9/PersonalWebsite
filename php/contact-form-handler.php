<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'seanptwomey99@gmail.com';

$email_subject = "New Form Submission";

$email_body = "Sender Name: $name. \n".
"Sender Email: $visitor_email. \n".
"Sender Message: $message. \n";

$to = "seanptwomey99@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");