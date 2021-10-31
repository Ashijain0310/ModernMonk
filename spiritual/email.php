<?php
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
include ('common.php');
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
$row= mysqli_num_rows($result);
if($row < 0)
{
$token = md5($_POST['email']).rand(10,9999);
mysqli_query($conn, "insert into users(username,email,password,contact,city,address) values ('$username','$email','$password','$contact','$city','$address')");
$link = "<a href='localhost/email-verification/verify-email.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";
require_once('phpmail/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP();
$mail->SMTPAuth = true;                  
$mail->Username = "worlddairy30@gmail.com";
$mail->Password = "dairyworld@10";
$mail->SMTPSecure = "ssl";  
$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->From='worlddairy30@gmail.com';
$mail->FromName='Ashi Jain';
$mail->AddAddress('email', 'username');
$mail->Subject  =  'Reset Password';
$mail->IsHTML(true);
$mail->Body    = 'Click On This Link to Verify Email '.$link.'';
if($mail->Send())
{
echo "Check Your Email box and Click on the email verification link.";
}
else
{
echo "Mail Error - >".$mail->ErrorInfo;
}
}
else
{
echo "You have already registered with us. Check Your email box and verify email.";
}
}
?>