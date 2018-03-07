<?php  
session_start();
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";

 $connect = mysqli_connect("localhost", "root", "", "testing4");

$email=$_SESSION['email'];

 $query = "SELECT * FROM tbl_unit ORDER BY unit_id";  
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

          <!-- modal -->
  <div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
        </div> 
        <div class="modal-body login-page "><!-- login-page -->     
                  <div class="login-top sign-top">
                    <div class="agileits-login">
                    <h5>Add Product</h5>
                    <form action="addproduct.php" method="post">
                      <h7>Product Name</h7>
                      <input type="text" class="text" name="name" placeholder="product name" required=""/>
                      <h7>Price</h7>
                      <input type="number" class="number" name="price" placeholder="price" required=""/>  
                     <div class="w3ls-submit"> 
                        <input type="submit" value="add">   
                      </div>  
                    </form>

                    </div>  
                  </div>
            </div>  
        </div> <!-- //login-page -->
      </div>
    </div>
  <!-- //modal --> 

  <!-- modal -->
  <div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
        </div> 
        <div class="modal-body login-page "><!-- login-page -->     
                  <div class="login-top sign-top">
                    <div class="agileits-login">
                    <h5>Delete Product</h5>
                    <form action="deleteproduct.php" method="post">
                      <h7>Product Name</h7>
                      <input type="text" class="text" name="name" placeholder="product name" required=""/>
                      <div class="w3ls-submit"> 
                        <input type="submit" value="Delete">   
                      </div>  
                    </form>

                    </div>  
                  </div>
            </div>  
        </div> <!-- //login-page -->
      </div>
    </div>
  <!-- //modal --> 

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
      <li ><a href="namesearch.php">User Profile</a></li>
      <li ><a href="product.php">Product</a></li>
      <li ><a href="admin_history.php">Order history</a></li>
      
      <li class="dropdown">
                    <a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Profile <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <!--  <li ><a href="orderhistory.php">Order histery</a></li> -->
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
      <a href="#myModal2" data-toggle="modal"><button>Add product</button></a>
      <a href="#myModal3" data-toggle="modal"><button>Delete product</button></a>




           <br /><br />  
           <div class="container" style="width:100%;padding-left: 20%;">  
                <h2 align="center">Product History</h2>  <br>

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for product.." title="Type in a product">



                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table id="myTable" class="table table-bordered" style="background-color: #F5F5DC;width:70%;">  
                          <tr>  
                               <!-- <th width="5%">ID</th>   -->
                               <th width="20%">Product</th>  
                               <th width="15%">Price</th>  
                               <!-- <th width="25%">email</th>   -->
                               <!-- <th width="40%">address</th>   -->
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                      //$myArray = explode(',', $row["item_unit"]);
                     ?>  
                          <tr>  
                               <td><?php echo $row["unit_name"]; ?></td>  
                                <td><?php echo $row["unit_id"]; ?></td>  
                                <!-- <td><?php //echo $row["email"]; ?></td>   -->
                               <!-- <td><?php //echo $row["address"]; ?></td>   -->
                          </tr>  
                     <?php  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
         </header>



  <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
<!-- requried-jsfiles-for owl -->
 <script src="js/owl.carousel.js"></script>
                      <script>
                      $(document).ready(function() {
                        $("#owl-demo2").owlCarousel({
                          items : 1,
                          lazyLoad : false,
                          autoPlay : true,
                          navigation : false,
                          navigationText : false,
                          pagination : true,
                        });
                      });
                    </script>
               <!-- //requried-jsfiles-for owl -->
 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
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
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}



</script>

