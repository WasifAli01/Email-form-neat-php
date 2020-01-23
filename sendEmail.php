<?php


$senderName = $_POST["name"];
$recieverEmail = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$subject = "You have recieved a message from " . $senderName ."\n". $subject;

mail($recieverEmail,$subject,$message);


?>