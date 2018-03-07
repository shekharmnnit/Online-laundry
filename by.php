<?php
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";


//start test
if(empty($_SESSION['item_quantity'])){
	// $_SESSION['item_name'] = array();
	$_SESSION['item_quantity'] = array();
	$_SESSION['item_unit'] = array();
   }
for($count = 0; $count < count($_POST["item_quantity"]); $count++)
 {  
 	// array_push($_SESSION['item_name'], $_POST["item_name"][$count]);
 	array_push($_SESSION['item_quantity'], $_POST["item_quantity"][$count]);
 	array_push($_SESSION['item_unit'], $_POST["item_unit"][$count]); 	   
 }
 echo $_SESSION['item_unit'][0];
// end test




// for($count = 0; $count < count($_POST["item_name"]); $count++)
//  {  
//  	$a = $_POST["item_name"][$count];
//  	$b = $_POST["item_quantity"][$count];
//  	$c = $_POST["item_unit"][$count];
//    echo $a . "<br>";
//    echo $b . "<br>";
//    echo $c . "<br>";
//  }
echo "string";
header('Location: opencart.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>hi bro</h1>
</body>
</html>