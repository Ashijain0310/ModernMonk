<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      body{
          background-image:url(spiritual.jpg);
          background-size:100% 100%;
          height:575px;
      }
      #content{
        padding-left:200px;
      }
      .option li{
          text-decoration:none;
          padding-left:20px;
          padding-top:15px;
      }
      .option li a{
        color:white;
      }
    </style>
    </head>
    <body>
        <div class="card-body">
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <br><br><br>
                        <h2>SIGN UP</h2>
                        <form  action="signup_authenticate.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="user" required = "true" >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password"  name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="option">
        <ul>
        <li>
        <a href="login.php">Already Have Account? Log In</a></li>
    </ul>
    </div>
        </div>
    </div>
     </body>
</html>