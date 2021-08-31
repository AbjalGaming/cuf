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


<html>
    <body>
        <form action="mail.php" method="POST">
            <p>First Name</p><input type="text" name="firstname">
            <p>Last Name</p><input type="text" name="lastname">
            <p>Stream</p><input type="text" name="Stream">
            <p>Email</p><input type="text" name="email">
            <p>your one copy handsome photo</p><input type="file" id="myFile" name="filename">
            <input type="submit" value="send">
            <input type="reset" value="clear">
        </form>
    </body>
</html>