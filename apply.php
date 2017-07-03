<?php

include('dbconnect.php');
session_start();
$id1=$_GET['id'];
$id=$_SESSION["id"];
if(isset($_SESSION["id"]))
{
    $query="SELECT * FROM student WHERE id='$id'";
    $result=mysqli_query($con,$query);
    $row1=mysqli_fetch_assoc($result);

}
$name=$row1['name'];
$email=$row1['email'];

$query="SELECT * FROM internship WHERE id='$id1'";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($result))
{
	$profile=$row['profile'];
	$description=$row['description'];
	$company=$row['company'];
	$date=date("Y/m/d");
	$query="INSERT INTO applied VALUES ('','$name','$email','$profile','$description','$company','$date')";
	if(mysqli_query($con,$query))
	{
		//echo "record succes";
		header('Location: student_main.php');
	}
	else
	{
		echo "error in inserting";
	}
}
mysqli_close($con);


?>