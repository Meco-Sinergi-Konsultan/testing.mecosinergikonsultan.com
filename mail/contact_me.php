<?php
// Check for empty fields
if (
   empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
) {
   echo "No arguments Provided!";
   return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'admin@mecosinergikonsultan.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Formulir dari Website:  $name";
$email_body = "Anda telah menerima pesan baru dari formulir kontak www.mecosinergikonsultan.com\n\n" . "Berikut detailnya:\n\nName: $name\nEmail: $email_address\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $email_address";
mail($to, $email_subject, $email_body, $headers);
return true;
