<?php

include('dbconnect.php');
session_start();
$id=$_SESSION["id"];
$profile=$_POST['profile'];
$description=$_POST['description'];
if(isset($_SESSION["id"]))
{
    $query="SELECT * FROM employer WHERE id='$id'";
    $result=mysqli_query($con,$query);
    $row1=mysqli_fetch_assoc($result);

}
$company=$row1['company'];
$query="INSERT INTO `internship` VALUES ('','$profile','$company','$description' )";
if(mysqli_query($con,$query))
{
	//echo "record succes";
	header('Location: employer_main.php');
}
else
{
	echo "error in inserting";
}
mysqli_close($con);
?>