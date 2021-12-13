<?php
$databaseHost = 'localhost:3306';
$databaseName = 'traveldb';
$databaseUsername = 'root'; 
$databasePassword = '';
$conn =  mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
session_start();
// Check connection
if(isset($_POST['sub2']))
{
$uname = $_POST['uname'];
$upassword = $_POST['pass'];
$username = $_POST['users'];

$sql = "INSERT INTO login (user,email,pass)
VALUES ('$username','$uname', '$upassword')";

if ($conn->query($sql) === TRUE) {
    echo "<h1><center> You have successfully created your account please login now</center> </h1>";
    $_SESSION['us']=$uname;
    header("Location:index.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}
if(isset($_POST['sub3']))
{
$name = $_POST['namec'];
$email = $_POST['emailc'];
$number = $_POST['numberc'];
$subject = $_POST['subjectc'];
$message = $_POST['messagec'];
$sql2 = "INSERT INTO contact (name,email,number,subject,message)
VALUES ('$name', '$email','$number','$subject','$message')";
if ($conn->query($sql2) === TRUE) {
  echo "<h1><center> Your contact details have been saved with us thanks</center> </h1>";

} else {
echo "Error: " . $sql2 . "<br>" . $conn->error;
}
}


$conn->close();
?>