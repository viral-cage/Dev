<?php
$to = "phulman12@gmail.com";
$subject = "Response from website";
$message = "I am very thankful to you";
$headers = "From: "support@viralcage.com";

if (mail($to, $subject, $message, $headers)){
echo "Mail send Sucessfully";
else{
echo "Can not send mail";
}
?>
