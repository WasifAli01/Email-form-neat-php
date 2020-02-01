<?php


$senderName = $_POST["name"];
$recieverEmail = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$subject = "You have recieved a message from " . $senderName ."\n". $subject;



 // Sending the message and all data to my email
$myEmailAddress = "wasifali719@yahoo.com";
$myMailSubject = "$senderName send an email to $recieverEmail with your app";
$myEmail = "<h1>Here is the E-mail</h1> <br> " . "$message";
mail($myEmailAddress, $myMailSubject, $myEmail);

if (@mail($recieverEmail,$subject,$message))
{
    header("Location: ./thankYou.php");
} else {
    echo header("Location: ./notSent.php");
}

?>