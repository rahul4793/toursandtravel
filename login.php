<?php
$databaseHost = 'localhost:3306';
$databaseName = 'traveldb';
$databaseUsername = 'root'; 
$databasePassword = '';
$mysqli =  mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
/////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['sub']))
{
$uname = $_POST['uname'];
$upassword = $_POST['pass'];

$sql = "select* from login where email='$uname'and pass='$upassword'";
$res = mysqli_query($mysqli,$sql) or die( mysqli_error($mysqli));
$result=mysqli_fetch_array($res);
if($result)
{
echo "<h1><center> You are login Successfully</center> </h1>";	
header("Location:index.html");
}
else
{
	echo "<h1><center> Login Failed</center> </h1>";	
}
}
?>
