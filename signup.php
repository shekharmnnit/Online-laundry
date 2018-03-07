<?php
session_start();
$db=new MYSQLi("localhost","root","","testing4");
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=validate($_POST["name"]);
	$phoneno=$_POST["phoneno"];
	$email=validate($_POST["email"]);
	$password=$_POST["password"];
	$address=$_POST["address"];

	$confirmpassword=$_POST["confirmpassword"];
	
	if($name==""||$phoneno==""||$email==""||$password==""||$confirmpassword==""||$address=="")
		echo "<script>alert('Please fill all the entries');window.location('index.php');</script>";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<script>alert('Invalid email');window.location('index.php');</script>";
}
	// $profilepic=$_FILES['image']['name'];
	// $target="pics/".basename($_FILES['image']['name']);
	// move_uploaded_file($_FILES['image']['tmp_name'],$target);
	if($password!=$confirmpassword)
		{echo "<script>alert('password do not match');window.location('index.php');</script>";
	die();}
	$query="SELECT * FROM userdetails U WHERE U.email='$email'";
$result=$db->query($query);
if($result->num_rows>0){
	echo "<script>alert('User with email-id exists.');window.location='login.php';</script>";
	die();

}

$query="SELECT * FROM userdetails U WHERE U.phoneno='$phoneno'";
$result=$db->query($query);
if($result->num_rows>0){
	echo "<script>alert('User with phone no. exists.');window.location='login.php';</script>";
	die();

}

// $password=md5($password);
$ins_query="INSERT INTO userdetails (name,phoneno,email,password,address) VALUES ('$name','$phoneno','$email','$password','$address')";
mysqli_query($db,$ins_query);
echo "<script>alert('Successfully signed up');window.location='index.php';</script>";


}

?>
<!DOCTYPE html>
<html>
<head><title></title>  <link rel="stylesheet" href="signup.css"></head>
<body></body>
</html>
