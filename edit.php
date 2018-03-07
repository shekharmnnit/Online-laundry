<?php
session_start();
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";
$db=mysqli_connect("localhost","root","","testing4");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name1=$_POST["name"];
	$email1=$_POST["email"];
	$password=$_POST["password"];
}	

$email=$_SESSION['email'];
$sql = "UPDATE userdetails SET name='$name1' WHERE email='$email'";
if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $db->error;
}

$sql = "UPDATE userdetails SET password='$password' WHERE email='$email'";
if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $db->error;
}

$sql = "UPDATE userdetails SET email='$email1' WHERE email='$email'";
if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $db->error;
}


$db->close();
header('Location: logout.php');


// $g=mysqli_query($db,"SELECT*FROM userdetails where email='$email'");


// $row =mysqli_fetch_assoc($g);
// $name=$row['name'];
// $phoneno=$row['phoneno'];
// $email=$row['email'];
?>
