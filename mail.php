<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n \n Email: $email \n \n Phone: $phone \n \n Message: $message";
$recipient = "griff@getluckee.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");


header("Location: thanks.html");

?>

