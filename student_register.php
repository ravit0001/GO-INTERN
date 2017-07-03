
<?php

include('dbconnect.php');
if( isset($_GET['name']) && isset($_GET['last_name']) && isset($_GET['email']) && isset($_GET['college']) &&isset($_GET['mobile']) && isset($_GET['password']) && !empty($_GET['name'])
  && !empty($_GET['last_name']) && !empty($_GET['email']) && !empty($_GET['college']) && !empty($_GET['mobile']) &&!empty($_GET['password']) )
{
  $name=$_GET['name'];
  $last_name=$_GET['last_name'];
  $email=$_GET['email'];
  $college=$_GET['college'];
  $mobile=$_GET['mobile'];
  $pass=$_GET['password'];
  $query="INSERT INTO `student` VALUES ('','$name','$email','$pass','$last_name','$college','$mobile')";
  if(mysqli_query($con,$query))
  {
    //echo "record succes";
    header('Location: student_login.php');
  }
  else
  {
    echo "error in inserting";
  }
}
else
{
  //echo "fill all details";
}
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <title>inten | project</title>

    <link rel="icon" type="img/png" href="img/images.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
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
                <a href="student_register.php" id="login-form-link">Student Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="student_register.php" method="get" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Student First Name" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="last_name" id="username" tabindex="1" class="form-control" placeholder="Student last Name" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="college" id="username" tabindex="1" class="form-control" placeholder="College Name" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="mobile" id="username" tabindex="1" class="form-control" placeholder="Mobile" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                 
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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