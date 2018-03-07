<?php
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";
$connect = mysqli_connect("localhost", "root", "", "testing4");

if(!empty($_SESSION['item_quantity'])){
	// $item_name = $_SESSION['item_name'];
	$item_quantity = $_SESSION['item_quantity']; 
	$item_unit = $_SESSION['item_unit'];
	$total=0;
	echo '<table class="container"  style="background-color:gray; "><tr><th>quantity</th><th>unit</th><th>price</th><th>total price</th></tr>';

	for($i = 0; $i < count($item_quantity); $i++)
	{ 
		echo "<tr>";
		// echo '<td>' . $item_name[$i] . "</td>";
	    echo '<td align="center">' . $item_quantity[$i] . "</td>";
	    echo "<td>" . $item_unit[$i] . "</td>";

	    $sql=" SElECT * FROM tbl_unit WHERE unit_name='$item_unit[$i]'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);
		$price=$row['unit_id'];

	    echo "<td>" . $price . "</td>";
	    echo "<td>" . number_format($price*$item_quantity[$i],2) . "</td>";
	    echo "</tr>";
	    $total=$total+$price*$item_quantity[$i];
	}
	echo "<tr>";
	// echo "<td>" . "</td>";	    
	echo "<td>" . "</td>";
	echo "<td>" . "</td>";
	echo "<th>" ."total:". "</th>";
	echo "<th>" . number_format($total,2) . "</th>";
	echo "</tr>";

	echo "<tr>";
	echo "</tr>";
	
	echo ('<tr><td colspan="6" align="center">');	
	echo ('<a href="clearcart.php"><button class="btn btn-info">clear all</button></a>');
	echo ('<form action="checkout.php" method="post"><input type="date" id="date" name="item_name" required /><input type="submit" class="btn btn-success btn-sm add" name="submit" value="checkout"></form>');
	echo ('</td></tr>');

	echo "<tr>";
	echo "<td>" ."." ."</td>";
	echo "</tr>";

	echo "</tabel>";
}
else{
	echo "cart is empty";	
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Deterge -  Laundry a Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Deterge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Font-awesome-CSS --> <link href="css/font-awesome.css" rel="stylesheet">
<!-- about-top-CSS --><link href="css/ziehharmonika.css" rel="stylesheet" type="text/css">
<!-- Index-Page-CSS --><link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--web-fonts-->
<!-- Logo-font --><link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<!-- Body-font --><link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!-- Headings-font --><link href="//fonts.googleapis.com/css?family=Cabin+Sketch:400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
</head>
<body>
	<div class="inner-banner-w3layouts">
    <div class="demo-inner-content">
    <!--/header-w3l-->
    <div class="header-w3-agileits" id="home">
  <div class="w3-header-bottom">
    <div class="container"> 
        <h1><a href="index.html"><span class="letter">D</span>eterge<span class="square"></span></a></h1> 
      <div class="header-w3-top">
        <div class="agileinfo-phone">
        <div class="phone-wthree-left">
          
          <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
          <p>Want a Launder...? <span>call us now!</span></p>
        </div>
         <h2> +0 123 456 789</h2>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!--//header-w3l-->
    </div>
       </div>
    </div>

<!-- echo ('<a href="clearcart.php"><button >clear</button></a>'); -->
	 <!-- echo ('<a href="checkout.php"><button >check out</button></a>'); -->
<h1 align="center" style="margin: 10%; margin-bottom: 10px;">Conform your bill</h1>

</body>
</html>
