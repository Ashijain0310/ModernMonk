<?php 

require('connection.php');
session_start();
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendMail($email,$v_code){
    require("PHPMailer/PHPMailer.php");
    require("PHPMailer/SMTP.php");
    require("PHPMailer/Exception.php");
    $mail = new PHPMailer(true);
    try {
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
      $mail->isSMTP();                                            
      $mail->Host       = 'smtp.gmail.com';                    
      $mail->SMTPAuth   = true;                                  
      $mail->Username   = 'worlddairy30@gmail.com';                     
      $mail->Password   = 'dairyworld@10';                            
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
      $mail->Port       = 465;                                    
  
      $mail->setFrom('worlddairy30@gmail.com', 'Modern Monk');
      $mail->addAddress($email);     
  
     
      $mail->isHTML(true);                                  
      $mail->Subject = 'Email verification from Modern Monk';
      $mail->Body    = "Thanks for Registrating With Modern Monks !!
                        Hope you will have a great experience on this site
                        <a href='http://localhost/spiritual/verify.php?email=$email&v_code=$v_code'>Verify</a>";
  
      $mail->send();
      return true;
  }   catch (Exception $e) {
      return false;
  }
}*/
if(isset($_POST['login']))
{
  $query="SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
  $result=mysqli_query($con,$query);
  if($result)
  {
    if(mysqli_num_rows($result)==1)
    {
      $result_fetch=mysqli_fetch_assoc($result);
      if(password_verify($_POST['password'],$result_fetch['password']))
      {
        $_SESSION['logged_in']=true;
        $_SESSION['username']=$result_fetch['username'];
        header("location: book.php");
      }
      else
      {
        echo"
          <script>
            alert('Incorrect Password');
            window.location.href='main.php';
          </script>
        ";
      }
      }
      else{
          echo"
          <script>
          alert('Email or Username Not Registered');
          window.location.href='main.php';
          </script>
          ";
      }
    }
  else
  {
    echo"
      <script>
        alert('Cannot Run Query');
        window.location.href='main.php';
      </script>
    ";
  }
}
if(isset($_POST['register']))
{
  $user_exist_query="SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
  $result=mysqli_query($con,$user_exist_query);

  if($result)
  {
    if(mysqli_num_rows($result)>0) 
    {
      $result_fetch=mysqli_fetch_assoc($result);
      if($result_fetch['username']==$_POST['username'])
      {
        echo"
          <script>
            alert('$result_fetch[username] - Username already taken');
            window.location.href='main.php';
          </script>
        ";
      }
      else
      {
        echo"
          <script>
            alert('$result_fetch[email] - E-mail already registered');
            window.location.href='main.php';
          </script>
        ";
      }
    }
    else 
    {
      $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
      $query="INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
      if(mysqli_query($con,$query))//&& sendMail($_POST['email'],$v_code))
      {
        echo"
          <script>
            alert('Registration Successful');
            window.location.href='main.php';
          </script>
        ";
      }
      else
      {
        echo"
          <script>
            alert('Cannot Run Query');
            window.location.href='main.php';
          </script>
        ";        
      }
    }
  }
  else
  {
    echo"
      <script>
        alert('Cannot Run Query');
        window.location.href='main.php';
      </script>
    ";
  }
}

?>