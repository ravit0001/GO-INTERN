

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

      input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
  border:2px solid #03b1ce ;}
  .tital{ font-size:16px; font-weight:500;}
   .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}  
    </style>
   
  </head>
  <body>


    <?php

    include ('dbconnect.php');
    $student_name=$row1['name'];
    $query="SELECT * FROM applied WHERE student_name='$student_name'";
    $result = mysqli_query($con,$query);

    ?>

      <div class="container" >
        <div class="row" style="padding-bottom:30px;"> 
   <div class="col-sm-3 col-sm-offset-2">
    <a href="internship.php" id="register-submit" tabindex="4" class="form-control btn btn-login">More Internships</a>
    
    </div>
    <div class="col-sm-3 col-sm-offset-3">
    <a href="student_logout.php" id="register-submit" tabindex="4" class="form-control btn btn-register btn-danger">Logout !</a>
    </div>
       </div>
      <div class="row">
        
        
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Student Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
              <div class="col-sm-6">
             <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">                 <input id="profile-image-upload" class="hidden" type="file">
            <div style="color:#999;" ></div>
                  </div>
              
              <br>
    
              <!-- /input-group -->
       
               </div>
        <div class="col-sm-6">
        <h4 style="color:#00b1b1;"><?php echo $row1['name']?></h4></span>
          <span><p>Student</p></span>            
        </div>
        <div class="clearfix"></div>
        <hr style="margin:5px 0 5px 0;">

          <div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "><?php echo $row1['name']?></div>
               <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"> <?php echo $row1['last_name']?></div>
            <div class="clearfix"></div>
          <div class="bot-border"></div>

          
          <div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><?php echo $row1['email']?></div>

           <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >College</div><div class="col-sm-7"><?php echo $row1['college']?></div>
          <div class="clearfix"></div>
            <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Mobile</div><div class="col-sm-7"><?php echo $row1['mobile']?></div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>

   </div>
</div>





<div class="container" style="padding-top:30px;">
      <div class="row">
          

          <div class="col-sm-12">
              <table class="table table table-striped">
                  <thead>
                    <tr>
                      <th>DATE</th>
                      <th>PROFILE</th>
                      <th>DESCRIPTION</th>
                      <th>COMPANY</th>
                      <th>STATUS</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php

                      while($row=mysqli_fetch_assoc($result))
                      {

                      ?>
                    <tr>
                      <td><?php echo $row['date']; ?></td>
                      <td><?php echo $row['profile']; ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td><?php echo $row['company_name']; ?></td>
                      <td>applied</td>
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