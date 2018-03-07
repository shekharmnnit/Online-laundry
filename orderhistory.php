<?php  
session_start();
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";

 $connect = mysqli_connect("localhost", "root", "", "testing4");

$email=$_SESSION['email'];

 $query = "SELECT * FROM tbl_order_items WHERE email='$email' ORDER BY item_name desc";  
 $result = mysqli_query($connect, $query);  
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

          <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- //Meta-Tags -->
<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Font-awesome-CSS --> <link href="css/font-awesome.css" rel="stylesheet">
                          <link href="orderhistory.css" rel="stylesheet">
<!-- about-top-CSS --><link href="css/ziehharmonika.css" rel="stylesheet" type="text/css">
<!-- Index-Page-CSS --><link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--web-fonts-->
<!-- Logo-font -->
<link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<!-- Body-font -->
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
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
         <h2> +0 123 456 789</h2>
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
                    <a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Profile <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li ><a href="orderhistory.php">Order histery</a></li>
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




           <br /><br />  
           <div class="container" style="width:100%;padding-left: 20%;">  
                <h2 align="center">Order History</h2>  <br>
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date"  placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered" style="background-color: #F5F5DC;width:70%;">  
                          <tr>  
                               <!-- <th width="5%">ID</th>   -->
                               <!-- <th width="30%">Customer Name</th>   -->
                               <!-- <th width="10%">Item</th>   -->
                               <th width="40%">Value</th>
                               <th width="5%">status</th>  
                               <!-- <th width="12%">Order Date</th>   -->
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                      $myArray = explode(',', $row["item_unit"]);
                     ?>  
                          <tr>  
                               <!-- <td><?php //echo $row["order_id"]; ?></td>   -->
                                <!-- <td><?php //echo $row["email"]; ?></td>   -->
                                <!-- <td><?php// echo $row["item_quantity"]; ?></td>   -->
                               <td><table class="table table-bordered" style="background-color: #DEB887;"><tr style="background-color:  #FF7F50;"><td colspan="6" align="center"><?php echo $row["item_name"]; ?></td></tr><tr><th>item</th><th>unit</th><th>price</th></tr> <?php for( $i=0; $i<count($myArray)-2; $i=$i+3 ){echo '<tr><td>'.$myArray[$i].'</td>'.'<td>'. $myArray[$i+1] .'</td>' . '<td>'. $myArray[$i+2] .'</td>' .'</tr>';} ?>
                                 <tr>
                                  <th></th>
                                  <th>delivery</th>
                                   <th><?php echo $myArray[$i];?></th>
                                 </tr>
                                 <tr>
                                  <th></th>
                                  <th>total</th>
                                   <th><?php echo $myArray[$i+1];?></th>
                                 </tr>
                               </table></td>

                               <!-- <td><?php //echo $row["item_name"]; ?></td>   -->
                         <th> <?php echo $row["status"];?></th>
                          </tr>  
                          
                     <?php  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
         </header>






<script type="text/javascript">
    $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });
  </script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
  <script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->







      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>