<?php
session_start();
$db=new MYSQLi("localhost","root","","testing4");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	$sql=" SElECT * FROM userdetails WHERE email='$email' AND password='$password'";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)==1)
	{
	
		$_SESSION['message']="You are now logged in";
		$_SESSION['email']=$email;
			
		header("location:member.php");
		}
		else{
			echo "<script>alert('Incorrect email/password');window.location='index.php';</script>";
		}

}
?>