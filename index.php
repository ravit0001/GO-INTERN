<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php

    include ('dbconnect.php');
    $query="SELECT * FROM internship";
    $result = mysqli_query($con,$query);

    ?>
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
</br></br></br></br></br></br>

<div id="about" class="container">
  <div class="row">
    <div class="col-sm-8">
      <h3>About   Internshala</h3><br>
      <h4>The platform started as a WordPress blog which aggregated internships across India and articles on education, technology and skill gap in 2010. The website was launched in 2013. Internshala launched its online trainings in 2014. The platform is used by 1.5 Mn students and 40,000 companies.</h4>
    </div>

    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

</br></br>
<div class="container">
  <div class="row">

 <div class="col-sm-10">
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Profile</th>
                      <th>Description</th>
                      <th>Company</th>
                      <th>Apply</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      while($row=mysqli_fetch_assoc($result))
                      {

                      ?>
                    <tr>
                      <td><?php echo $row['profile']; ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td><?php echo $row['company']; ?></td>
                      <td><a href="student_login.php" class="btn btn-success"> Apply </a></td>
                      
                    </tr>
                  
                  <?php
                }
                    mysqli_close($con);

                    ?>
                  </tbody>
              </table>
          </div>
    </div>
    </div>      


</body>
</html>