<?php
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";
$connect = mysqli_connect("localhost", "root", "", "testing4");

// $ins_query="INSERT INTO tbl_order_items (order_id, item_name, item_quantity, item_unit, email, presentdate) VALUES ('$name','$phoneno','$email','$password')";
// mysqli_query($db,$ins_query);
echo $_SESSION['ddate'];
$item_name = $_SESSION['ddate'];
// for date
	$a= date("y-m-d");
	$c=$item_name;
	$frontdate=new DateTime($a);
	$todate=new DateTime($c);
	$f= $frontdate->diff($todate)->format("%R%a");
	echo $f;
	$status="not_receaved";

if(!empty($_SESSION['item_quantity']) && $f>=0){
	//echo "hurray!! cart is not empty";
	
	$item_quantity = $_SESSION['item_quantity']; 
	$item_unit = $_SESSION['item_unit'];
	$total=0;
	$order_id = uniqid();
	echo count($item_quantity);


	// $item_namee = $item_name[0];
	    $item_quantityy = $item_quantity[0];
	    $item_unitt = $item_unit[0] . "," . $item_quantity[0];

	    echo $item_name;

	for($i = 0; $i < count($item_quantity); $i++)
	{
		// $item_namee = $item_namee[$i];
	    // $item_quantityy = $item_quantity[$i];
	    $sql=" SElECT * FROM tbl_unit WHERE unit_name='$item_unit[$i]'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);
		$price=$row['unit_id'];

		if($i==0)
		$item_unitt=$item_unitt ."," . $price*$item_quantity[$i];
		if($i!=0)
	    $item_unitt = $item_unitt . "," .$item_unit[$i] . "," . $item_quantity[$i] . "," . $price*$item_quantity[$i];

	    echo "price=" . $price . "<br>";
	    echo "sum price=" . number_format($price*$item_quantity[$i],2) . "<br>";
	    echo "<br>";
	    $total=$total+$price*$item_quantity[$i];
	
	// 	$ins_query="INSERT INTO tbl_order_items (order_id, item_name, item_quantity, item_unit, email, presentdate) VALUES ('$order_id','$item_namee','$item_quantityy','$item_unitt','$email',NOW())";
	// mysqli_query($connect,$ins_query);
	}
	// for dilivery charge
	if($f>=0)
		if($f>3)
			$f=3;

			$sql=" SElECT * FROM deliv WHERE delivery='$f'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);

		$delivery=$row['price'];

	$total=$total+$delivery;
	$item_unitt=$item_unitt . "," . $delivery ."," . $total; 

	$ins_query="INSERT INTO tbl_order_items (order_id, item_name, item_quantity, item_unit, email, presentdate,status) VALUES ('$order_id','$item_name','$total','$item_unitt','$email',NOW(),'$status')";
	mysqli_query($connect,$ins_query);

	echo "sum total=" . number_format($total,2) . "<br/>";
	header('Location: clearcart.php');
}
else{
	echo "no any order selected ";	
}
?>