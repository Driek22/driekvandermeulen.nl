<?php

//Asign a value to html name tags
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dropdown = $_POST['dropdown'];
$emailAdress = $_POST['emailAdress']
$message = $_POST['message']

//Create mail elements with the $values
$formcontent="From: $name \n Message: $message";
$recipient = "inbox@driekvandermeulen.nl";
$subject = "$dropdown";
$mailheader = "From: $email \r\n";

//Prepare and send the mail
mail ($recipient, $subject, $formcontent, $mailheader) or die ("Error!");

?>