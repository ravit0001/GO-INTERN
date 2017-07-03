<?php

include('dbconnect.php');
if( isset($_GET['email']) && isset($_GET['password']) && !empty($_GET['email']) && !empty($_GET['password']) )
{
  //echo "yoyo";
  $email=$_GET['email'];
  $pass=$_GET['password'];
  $query="SELECT * FROM student WHERE email='$email' AND pass='$pass'";

  $result=mysqli_query($con,$query);
  if($row=mysqli_fetch_assoc($result))
  {
    //
    session_start();
    $_SESSION["id"]=$row['id'];
    //echo "record succes";
    header('Location: student_main.php');
  }
  else
  {
    echo "error in inserting";
    header('Location: student_login.php');
  }
}
else if(empty($_GET['email']) && empty($_GET['password']))
{
  //echo "fill all details";
  //header('Location: login.php');
}
mysqli_close($con);


 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signin Template for Bootstrap</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>


  </script>
  <body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" height="62" width="122"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-bottom:25px; padding-top:20px">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="student_register.php">STUDENT REGISTER</a></li>
        <li><a href="student_login.php">STUDENT LOGIN</a></li>
        <li><a href="employer_register.php">EMPLOYER REGISTER</a></li>
        <li><a href="employer_login.php">EMPLOYER LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>
</br></br></br>


<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-12">
                <a href="student_login.php" class="active" id="login-form-link">Student Login</a>
              </div>
           
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="student_login.php" method="get" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                 
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <a href="student_register.php" id="register-submit" tabindex="4" class="form-control btn btn-register">Don't have Account</a>
                        </div>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









    
  </body>
</html>
