<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$message= $_POST['message'];
$to = "vatsanmusic106@gmail.com";
$subject = "Mail From LIFE EXPECTANCY TEAM";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Contact no = " . $contact . "\r\n Message =" . $message;
$headers = "From: lifeexpectancyteam@gmail.com" . "\r\n" .
"CC: ragulsanjeevan8925@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
