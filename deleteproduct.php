<?php
session_start();
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='product.php'</script>";

$db=new MYSQLi("localhost","root","","testing4");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	//$name=validate($_POST["name"]);
	$name=$_POST["name"];
	//$email=validate($_POST["email"]);
	//$price=$_POST["price"];
	//$address=$_POST["address"];

	//$confirmpassword=$_POST["confirmpassword"];
	
	if($name=="")
		echo "<script>alert('Please fill all the entries');window.location('product.php');</script>";



	$query="SELECT * FROM tbl_unit U WHERE U.unit_name='$name'";
$result=$db->query($query);
if($result->num_rows>0){
	$ins_query="DELETE FROM tbl_unit WHERE unit_name='$name'";
	 mysqli_query($db,$ins_query);
	 echo "<script>alert('Product deleted successfully');window.location='product.php';</script>";	
}
else
{
	echo "<script>alert('Product not exist..');window.location='product.php';</script>";
	die();	
}


// $ins_query="INSERT INTO tbl_unit (unit_id,unit_name) VALUES ('$price','$name')";
// mysqli_query($db,$ins_query);
// echo "<script>alert('Successfully submitted');window.location='product.php';</script>";


}

?>
<!DOCTYPE html>
<html>
<head><title></title>  <link rel="stylesheet" href="signup.css"></head>
<body></body>
</html>
