<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "contact@ronnel.codes";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo"Message Sent!";
?>