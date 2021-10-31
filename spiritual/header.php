<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>Lifestyle store</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" >
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span> 
 </button>
 <a class="navbar-brand" href="index.php">Lifestyle Store</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 if (isset($_SESSION['email'])) {
 ?>
 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
 <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> 
Settings</a></li>
 <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
 <?php
 } else {
    ?>
    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> 
   Sign Up</a></li>
    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 
   Login</a></li>
    <?php
    }
    ?>
    </ul>
    </div>
    </div>
   </div>
</body>
</html>