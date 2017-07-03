


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><title>inten | project</title>

    <!-- Bootstrap -->
    <link rel="icon" type="img/png" href="img/images.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

  	<?php

  	include('dbconnect.php');
  	$id=$_GET['id'];
  	$query="SELECT * FROM internship WHERE id='$id'";
  	$result = mysqli_query($con,$query);

  	?>

  	<div class="container " style="padding-top:30px; padding-bottom:30px ">
  	<div class="row">
  	<div class="col-sm-8">
  		<h2> EDIT INTERSHIP FORM</h2>
	  	<form role="form" action="edit.php" method="get">

	  	<?php	
	  	while ($row=mysqli_fetch_assoc($result)) {
  		?>
	  			
	  	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">		
	      <div class="form-group" >
	        <label> PROFILE</label>
	        <input type="text" name="profile" value ="<?php echo $row['profile']?>" class="form-control">
	      </div>

	      <div class="form-group">
	        <label> DESCRIPTION</label>
	        <input type="text" name="description" value ="<?php echo $row['description']?>" class="form-control">
	      </div>
	      <div>
	        <button type="submit" class="btn btn-info btn-block">
	          EDIT INTERNSHIP
	        </button>  
	      </div>
	      <?php
	      	}
	      	mysqli_close($con);

	      	?>
	    </form>
	    </div>	
	    </div>	
    </div>
  </body>
</html>