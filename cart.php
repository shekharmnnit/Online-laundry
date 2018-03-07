<?php
session_start();
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";
$db=mysqli_connect("localhost","root","","testing4");

$email=$_SESSION['email'];

$g=mysqli_query($db,"SELECT*FROM userdetails where email='$email'");


$row =mysqli_fetch_assoc($g);
$name=$row['name'];
$email=$row['email'];
?>


<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=testing4", "root", "");
function fill_unit_select_box($connect)
{ 
 $output = '';
 $query = "SELECT * FROM tbl_unit ORDER BY unit_name ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["unit_name"].'">'.$row["unit_name"].'</option>';
 }
 return $output;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Laundry</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="laundry Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
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

<header> 	
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
      <div class="top-nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active" ><a href="member.php">Home</a></li>
      <!-- <li ><a   href="profile.php">Profile</a></li> -->
      <li ><a href="about.html">About us</a></li>
      <li ><a href="#footer">Contact us</a></li>
      <li ><a href="cart.php">Order now</a></li>
      
      <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Profile <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li ><a href="orderhistory.php">Order histery</a></li>
                      <li ><a href="profile.php">Profile</a></li>
                      <li ><a href="logout.php">Logout</a></li>
                    </ul>
                  </li>
                </ul> 
                <div class="clearfix"> </div>
              </div>  
            </nav>    
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!--//header-w3l-->
    </div>
       </div>
    </div>
  <!--/banner-section-->
<br><br><br>
<h2><center> Welcome <?php echo $name;?></center></h2><br>



  <br />
  <div class="container">
   <h3 align="center">Add Remove </h3>
   <br />
   
   <form action="by.php" method="post" >
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>Enter Item Name</th>
       <th>Enter Quantity</th>
       <!-- <th>Select delivary date</th> -->
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
     </table>
     <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Insert" />
     </div>
    </div>
   </form>
  </div>
</header>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="">Select Unit</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><input type="number" name="item_quantity[]" class="form-control item_quantity" /></td>';

  // html += '<td><input type="date" name="item_name[]" class="form-control item_name" /></td>';
  
  
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 // validation start
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.item_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_unit').each(function(){
   var count = 1;
   alert($(this).val());
   if($(this).val() == 'shekhar')
   {
    alert($(this).val());
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
    alert("<?php echo "sxgub" ?>");
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
    alert("<?php echo "fuck" ?>");
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 // validation end
 
});
</script>