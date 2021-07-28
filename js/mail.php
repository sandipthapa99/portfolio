<?php
//get data from form  
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "sandipthapa386@gmail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $firstname . $last_name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:home-one.html");
?>