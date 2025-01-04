<?php

// Save the name the user enters as a variable, retrieves value from name field on contact form
$name = $_POST['name'];

// Save the email the user enters as a variable, retrieves value from email field on contact form
$visitor_email = $_POST['email'];

// Save the message the user enters as a variable, retrieves value from message field on contact form
$message = $_POST['message'];

// Create a variable for the subject of the form contents email
$email_subject = "New Form Submission";

// Create a variable for the body of the form contents email containing the previously saved variables separated by new lines
$email_body = "Sender Name: $name. \n".
"Sender Email: $visitor_email. \n".
"Sender Message: $message. \n";

// Create a variable for the email that the form contents are sent from (appears it comes from myself)
$email_to_and_from = "seanptwomey99@gmail.com";

// Marks the form contents email as being "from" myself and inserting a line to reply to the sender
$headers = "From: $email_to_and_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// Combine the previous variables into the PHP mail function 
mail($email_to_and_from, $email_subject, $email_body, $headers);

// Link to PHP fields on contact page
header("Location: contact.html");