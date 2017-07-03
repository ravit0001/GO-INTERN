<?php

include('dbconnect.php');
//session_start();
//$id=$_SESSION["id"];
$id=$_GET['id'];
$id1=$_GET['id'];
$query="SELECT * FROM internship WHERE id='$id'";
$result=mysqli_query($con,$query);

while($row1=mysqli_fetch_assoc($result))
{
	$profile=$row1['profile'];
	$company=$row1['company'];
	$query1="DELETE FROM applied WHERE profile='$profile' AND  company_name='$company' ";
	if(mysqli_query($con,$query1))
	{
		echo "success 1";
	}
	else
	{
		echo "error occured 1 ".mysqli_error($con);;
	}
}

$query="DELETE FROM internship WHERE id='$id1'";
if(mysqli_query($con,$query))
{
	//echo "succes 2";
	header('Location:employer_main.php');
}
else
{
	echo "error occured 1 ".mysqli_error($con);
}
mysqli_close($con);

?>