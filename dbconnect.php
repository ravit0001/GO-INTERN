<?php
$host='localhost';
$user='root';
$pass='';
$dbname='internshala';
$con=mysqli_connect($host,$user,$pass,$dbname);
if(!$con)
{
	die('error in connection');
}
else
{
	//echo "connection okkk";
}
?>