<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       /* body{
             background-image:url('Breathe.jpg');
            background-size:100% 100%;
            height:542px;
             background-repeat:no-repeat;
            backdrop-filter:blur(1.5px);
        }*/
        </style>
</head>
<body>
<?php      
    include('common.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
       
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            echo "<h1 style='padding-top:200px;font-family:Crimson-Text; margin-left:-750px;font-size:40px;color:#F8F5EF;'><center> Login Successful !!</center></h1>";
            echo "<p style='color:white; font-family:Nunito Sans; font-size:21px; padding-left:50px;'> A smile is a spiritual perfume you spray on others<br/> everyone near you benefits from it.</p>";
        } 
        else{  
            echo "<h1 style='padding-top:200px;font-family:Crimson-Text; margin-left:-750px;font-size:40px;color:#F8F5EF;'> Login failed. Invalid username or password !!</h1>" ; 
            echo "<p style='color:white; font-family:Nunito Sans; font-size:21px; padding-left:50px;'> Never be in hurry; do everything quietly and in a calm spirit. Do not lose your inner peace!!</p>";
        }     
?> 
</body>
</html>