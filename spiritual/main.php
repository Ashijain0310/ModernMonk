<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
        .left{
        display:inline-block;
        position:absolute;
        top:20px;
        left:40px;
    }
    .left p{
        color:aliceblue;
        font-family:cursive;
        margin-left:6px;
        margin-top:5px;
        color:#433C3C;
        font-family:Nunito;
        font-size:22px;
    }
    .navbar{
       display:inline-block;
       top:-190px;
       float:right;
       padding-right:50px;
       padding-top:20px;
    }
    .navbar li{
        display:inline-block;
        font-size: 15px;
        font-family:Nunito sans;
    }
    .navbar li a{
        color:#433C3C;
        text-decoration: none; 
        padding:15px 17px;
    }
    .navbar li a:hover{
        text-decoration:underline;
        color:#867070;
    }
    #banner_image{
        background-repeat:no-repeat;

    }
    .text p{
       font-family: 'Satisfy', cursive;
        font-size:30px;
        padding-left:150px;
        padding-top:40px;
    }
    .button ul{
        padding-left:250px;
    }
    .button li{
        display:inline-block;
        padding-top:15px;
        padding-left:20px;
    }
    .button a{
        color: #433C3C;
        border:1px solid #867070;
        border-radius:30px;
        line-height:15px;
        padding:7px 12px 7px 12px;
        text-decoration:none;
        font-family:Nunito sans;
    }
    .button li a:hover{
        text-decoration:none;
        background-color:#D7C9C9;
    }
    </style>
</head>
<body>
    <div id="content">
    <div id = "banner_image" style="background-image:url(sunshine.jpg); background-size:100% 100%; height:575px;padding-top:200px;">
<div class="left">
        <p>Modern Monk</p>
    </div>
    <div class="center">
        <ul class="navbar">
            <li><a href="main.php">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="ted.php">TED TALKS</a></li>
            <li><a href="book.php">BOOKS</a></li>
            <li><a href="">CONTACT</a></li>
        </ul>
    </div>
    <div class="text">
        <p>Quite the mind and the soul will speak !!</p>
    </div>
    <?php 

      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
        echo"
          <div class='user'>
            $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
          </div>
        ";
      }
      else
      {
        echo"
          <div class='sign-in-up' style='margin-left:280px;' >
            <button type='button' onclick=\"popup('login-popup')\" style='color: #433C3C; border:1px solid #867070; border-radius:30px; line-height:15px;padding:7px 12px 7px 12px;'>LOGIN</button>
            <button type='button' onclick=\"popup('register-popup')\" style='color: #433C3C; border:1px solid #867070; border-radius:30px; line-height:15px;padding:7px 12px 7px 12px;'>REGISTER</button>
          </div>
        ";

      }

    ?>
  </header>

  <div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="register-btn" name="register" action="book.php">REGISTER</button>
      </form>
    </div>
  </div>


  <?php 
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
      echo"<h1 style='text-align: center; margin-top: 200px;'> WELCOME TO THIS WEBSITE -  $_SESSION[username]</h1>";
    }
    ?>

  <script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
  </script>
</body>
</html>