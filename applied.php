<?php

include('dbconnect.php');
session_start();
$id=$_SESSION["id"];
//echo $id;
if(isset($_SESSION["id"]))
{
    $query="SELECT * FROM employer WHERE id='$id'";
    $result=mysqli_query($con,$query);
    if($row=mysqli_fetch_assoc($result))
    {
    	$company=$row['company'];
    	//echo $company;
    	$query="SELECT * FROM applied WHERE company_name='$company'";
    	$result=mysqli_query($con,$query);
    }
    else
    {
    	echo "error ";
    }

}
else
{
	echo "error";
}


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>inten | project</title>

    <!-- Bootstrap -->
    <link rel="icon" type="img/png" href="img/images.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <style type="text/css">
    h5{
      color: white;
    }
    </style>
  </head>
  <body>


    <div class="container" >
          
<div class="col-sm-5 col-sm-offset-3">
    <a href="employer_main.php" id="register-submit" tabindex="4" class="form-control btn btn-login"> Back to Profile !</a></br></br>
    </div>
          <div class="col-sm-10">
              <table class="table table-striped">
              	<thead>
                    <tr>
                      <th>Student Name</th>
                      <th>Student email</th>
                      <th>Profile</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      while($row1=mysqli_fetch_assoc($result))
                      {

                      ?>
                    <tr>
                    	<td> <?php echo $row1['student_name']; ?></td>  
                    	<td><?php echo $row1['student_email']; ?></td>  
                    	<td><?php echo $row1['profile']; ?></td>
                    	<td><?php echo $row1['description']; ?></td>
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






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>