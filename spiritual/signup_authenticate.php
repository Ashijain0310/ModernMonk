<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('common.php');
$con = mysqli_connect ("localhost","root","","modern_monk") or die (mysqli_error($con));
$username=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$user_registration_query = "insert into users(username,email,password,contact,city,address) values ('$username','$email','$password','$contact','$city','$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "<h3><center>User Successfully Inserted</center></h3>";
?>
<a href="login.php" style="font-size:20px;font-family:sans-serif;padding-left:600px; color:black;text-decoration:none;">Log In</a>
</body>
</html>
