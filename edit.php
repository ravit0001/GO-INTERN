<?php

include('dbconnect.php');
$id=$_GET['id'];
$profile=$_GET['profile'];
$description=$_GET['description'];
$query="UPDATE internship SET profile='$profile', description='$description' WHERE id='$id' ";
if(mysqli_query($con,$query))
{
	//echo "successful";
	header('Location:employer_main.php');
}
else
{
	echo "error ";
}

mysqli_close($con);
?>