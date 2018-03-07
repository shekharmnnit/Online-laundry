<?php 
	$db = mysqli_connect("localhost", "root", "", "testing4");
	$name="receaved";
	$name1="washed";
	$name2="delivered";
 if (isset($_GET['edit'])) {
    $address = $_GET['edit'];
    echo $address;
    mysqli_query($db, "UPDATE tbl_order_items SET status='$name' WHERE order_id='$address'");

    $_SESSION['message'] = "Address deleted!"; 
	header('location: admin_history.php');

  }


   if (isset($_GET['update'])) {
    $address = $_GET['update'];
    echo "washed";
    mysqli_query($db, "UPDATE tbl_order_items SET status='$name1' WHERE order_id='$address'");

    $_SESSION['message'] = "Address deleted!"; 
	header('location: admin_history.php');

  }
  if (isset($_GET['del'])) {
    $address = $_GET['del'];
    echo "delivered";
    mysqli_query($db, "UPDATE tbl_order_items SET status='$name2' WHERE order_id='$address'");

    $_SESSION['message'] = "Address deleted!"; 
	header('location: admin_history.php');

  }



if (isset($_GET['dell'])) {
	$address = $_GET['del'];
	mysqli_query($db, "DELETE FROM tbl_unit WHERE unit_name='$address'");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}
?>