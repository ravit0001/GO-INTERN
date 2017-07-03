

<?php

include('dbconnect.php');
session_start();
$id=$_SESSION["id"];
if(isset($_SESSION["id"]))
{
    $query="SELECT * FROM student WHERE id='$id'";
    $result=mysqli_query($con,$query);
    $row1=mysqli_fetch_assoc($result);

}
else
{
  header('Location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><title>inten | project</title>

    <!-- Bootstrap -->
    <link rel="icon" type="img/png" href="img/images.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style type="text/css">
    h5{
      color: white;
    }


    </style>
    <script type="text/javascript">
    $(document).ready(function () {

        $("#btn").click(function () {
            $("#btn").attr("disabled", true);

            return true;

        });
    });

    </script>
  </head>
  <body>


    <?php

    include ('dbconnect.php');
    $query="SELECT * FROM `internship`";
    $result = mysqli_query($con,$query);

    ?>


    <div class="container">
      
      <div class="row" style="padding-bottom:30px;">
        <div class="col-sm-3 col-sm-offset-2">
    <a href="internship.php" id="register-submit" tabindex="4" class="form-control btn btn-login">More Internships</a>
    
    </div>
        <div class="col-sm-3 col-sm-offset-3">
    <a href="student_main.php" id="register-submit" tabindex="4" class="form-control btn btn-login">Profile !</a>
    </div>
      </div>
      <div class="row">
          

          <div class="col-sm-10">
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>PROFILE</th>
                      <th>DISCRIPTION</th>
                      <th>COMAPNY NAME</th>
                      <th>APPLY</th>
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
                      <td><a id="btn" href="apply.php?id=<?php echo $row['id']; ?>" class="btn btn-info" role="button">Click to Apply </a>
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