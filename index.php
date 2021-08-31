<?php

$firstname = $_POST['firstname'];
$lasttname = $_POST['lastname']
$stream = $_POST['stream']
$filename = $_POST['filename']
$email = $_POST['email']

$formcontant = "From: $firstname \n Filename: $filename";
$mailTo = "hoqueabjalur@gmail.com";
$subject = "Contact Form Submission ";
$mailheader = "From: $email \r\n";
mail ($mailTo, $formcontant, $mailheader) or die("Error");
echo "Thank You!";

?>


