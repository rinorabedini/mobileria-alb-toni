<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$location = $_POST['location'];
$message = $_POST['message'];

$email_from = 'info@mobalbtoni.com';  //website domain

$email_subject = 'New form submission';

$email_body = "User name: $name.\n".
               "User email: $visitor_email.\n".
               "User location: $location.\n".
               "User Message: $message .\n";
 
$to = 'mobileria.albtoni@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>