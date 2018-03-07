<?php
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";
$connect = mysqli_connect("localhost", "root", "", "testing4");

$sql=" SElECT * FROM userdetails WHERE email='$email'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);
		$phone=$row['phoneno'];
		$name=$row['name'];
		$address=$row['address'];

$item_namee=$_POST["item_name"];
$_SESSION['ddate'] = $item_namee;
$item_name=$_SESSION['ddate'];
echo $_SESSION['ddate'];
?>


<!DOCTYPE html>
<html>
<head>
	  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>
	<!-- header -->
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
         <h2>9858745236</h2>
        </div>
      </div>
      
      <div class="clearfix"> </div>
    </div>
  </div>
  <!--//header-w3l-->
    </div>
       </div>
    </div>
  <!--/banner-section-->

<h1 align="center">conform your address</h1>	
<div align="center" style="background-color: gray; margin: 10%; margin-top:10px; margin-bottom: 20px;">
<h3><?php echo $phone; ?></h3>
<h3><?php echo $name; ?></h3>
<h3><?php echo $address; ?></h3>
<button><h5>edit profile</h5></button><br/>
</div>
<h1 align="center">Your bill</h1>


<?php



// $b="2018-1-12";
// $b=$item_name;
$a= date("y-m-d");
$c=$item_name;
$frontdate=new DateTime($a);
$todate=new DateTime($c);
$f= $frontdate->diff($todate)->format("%R%a");
echo $f;
// $f=0;


if(!empty($_SESSION['item_quantity']) && $f>=0){
	//echo "hurray!! cart is not empty";
	// $item_name = $_SESSION['item_name'];
	$item_quantity = $_SESSION['item_quantity']; 
	$item_unit = $_SESSION['item_unit'];
	$sumtotal=0;
	echo '<table class="container"  style="background-color:gray; "><tr><th>item name</th><th>quantity</th><th>unit</th><th>price</th><th>total price</th></tr>';

	for($i = 0; $i < count($item_quantity); $i++)
	{ 
		echo "<tr>";
		echo '<td>' . $item_name . "</td>";
	    echo '<td align="center">' . $item_quantity[$i] . "</td>";
	    echo "<td>" . $item_unit[$i] . "</td>";

	    $sql=" SElECT * FROM tbl_unit WHERE unit_name='$item_unit[$i]'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);
		$price=$row['unit_id'];

	    echo "<td>" . $price . "</td>";
	    echo "<td>" . number_format($price*$item_quantity[$i],2) . "</td>";
	    echo "</tr>";
	    $sumtotal=$sumtotal+$price*$item_quantity[$i];
	}
	echo "<tr>";
	echo "<td>" . "</td>";	    
	echo "<td>" . "</td>";
	echo "<td>" . "</td>";
	echo "<th>" ."sum-total:". "</th>";
	echo "<th>" . number_format($sumtotal,2) . "</th>";
	echo "</tr>";
	if($f>=0){
		if($f>3)
			$f=3;

			$sql=" SElECT * FROM deliv WHERE delivery='$f'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);

		$delivery=$row['price'];
		echo "<tr>";
	echo "<td>" . "</td>";	    
	echo "<td>" . "</td>";
	echo "<td>" . "</td>";
	echo "<th>" ."delivery:". "</th>";
	echo "<th>" . $delivery . "</th>";
	echo "</tr>";
		$total=$sumtotal+$delivery;	
	}
	
	echo "<tr>";
	echo "<td>" . "</td>";	    
	echo "<td>" . "</td>";
	echo "<td>" . "</td>";
	echo "<th>" ."total:". "</th>";
	echo "<th>" . number_format($total,2) . "</th>";
	echo "</tr>";

	echo "<tr>";
	echo "</tr>";
	
	// echo "<tr>";
	// echo "<td>" . "</td>";
	// echo "<td>" . "</td>";
	// echo ('<td>' . '<a href="conformorder.php"><button class="btn btn-info">conform order</button></a>'. '</td>');
	// echo "</tr><br/>";
	echo ('<tr><td colspan="6" align="center">');	
	echo ('<a href="conformorder.php"><button class="btn btn-info">conform order</button></a>');
	echo ('</td></tr>');

	echo "<tr>";
	echo "<td>" ."." ."</td>";
	echo "</tr>";

	echo "</tabel>";
}
else{
	echo "no any order selected ";	
}
?>
<!-- <h5>125</h5> -->
<!-- <a href="conformorder.php"><button >conform order</button></a> -->


	

</body>
</html>