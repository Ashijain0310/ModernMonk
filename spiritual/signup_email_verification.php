<?php
include "common.php";
$to_email = $_POST['email'];
$subject = "Simple email Test emailvia php";
$body = "Hi,This is test email";
$headers = "From: worlddairy30@gmail.com";
if(mail($to_email, $subject, $body, $headers)){
    echo "Email successfully sent to $to_email";
}else{
    echo "Email sending failed....";
}
?>