<?php
session_start();
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";
$db=mysqli_connect("localhost","root","","testing4");

$email=$_SESSION['email'];

$g=mysqli_query($db,"SELECT*FROM userdetails where email='$email'");


$row =mysqli_fetch_assoc($g);
$name=$row['name'];
$phoneno=$row['phoneno'];
$password=$row['password'];

// $email=$row['email'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Deterge -  Laundry a Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Deterge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
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
  <!-- <model> -->
  <div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->     
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>Login</h5>
										<form action="#" method="post">
											<input type="email" class="email" name="Email" placeholder="Email" required=""/>
											<input type="password" class="password" name="Password" placeholder="Password" required=""/>
											<div class="wthree-text"> 
												<ul> 
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span> Remember me ?</span> 
														</label> 
													</li>
													<li> <a href="#">Forgot password?</a> </li>
												</ul>
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
												<input type="submit" value="LOGIN">  	
											</div>	
										</form>

										</div>  
									</div>
						</div>  
				</div> <!-- //login-page -->
			</div>
		</div>
<!-- </model> -->
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
										<h5>Edit</h5>
										<form action="edit.php" method="post">
											<input type="text" name="name" value="<?php echo $name?>" required=""/>
											<input type="email"  name="email" value="<?php echo $email?>" required=""/>
											<input type="password"  name="password" value="<?php echo $password?>" required=""/>
											<div class="wthree-text"> 
												
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
												<input type="submit" value="conform">  	
											</div>	
										</form>

										</div>  
									</div>
						</div>  
				</div> <!-- //login-page -->
			</div>
		</div>
	<!-- //modal --> 
<!-- <contant> -->
	<div style="margin-left: 25%;margin-right: 25%;margin-top: 8%;margin-bottom: 8%;width: 50%;">
		<table style="border: 1px solid black;border-collapse: collapse;width: 100%;">
			<tr>
				<td style="border: 1px solid black;border-collapse: collapse;margin:10px;">
			<h1>Login & secyrity<br></h1></td>
		</tr>
			<tr><td style="border: 1px solid black;border-collapse: collapse;">
			<br>  name:<br>
			<h5><?php echo $name;?></h5><br></td>		
			</tr>
			<tr><td style="border: 1px solid black;border-collapse: collapse;">
	<br>E-mail:<br>
	<h5><?php echo $email;?></h5><br></td>
			</tr>
			<tr><td style="border: 1px solid black;border-collapse: collapse;">
	<br> Phone no.:<br>
	<h5><?php echo $phoneno;?></h5><br></td>
			</tr>
			<tr><td style="border: 1px solid black;border-collapse: collapse;">
	<br> password:<br>
	<h5> ******** </h5>
	<a class="btn1-w3-agileits" href="#myModal2" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i>change password</a>.<br></td>
			</tr>
		</table>
		<div style="margin-left: 40%;margin-top: 5px;">
		<a class="btn2-w3-agileits" href="#myModal3" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edit profile</a>
		</div>
	</div>
<!-- </contant> -->
<!--footer -->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-3 footer-grids w3l-agileits">
					<h6><a href="index.html"><span class="f-letter">D</span>eterge<span class="f-square"></span></a></h6>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">
					<h3>Address</h3>
					<p>3745 Noriega St,</p>
					<p>San Francisco,</p>
					<p>CA 94122, USA.</p>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">
					<h3>Connect with us</h3>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
					<!-- <div class="bottons-agileits-w3layouts">
						<a class="btn1-w3-agileits" href="#myModal2" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>.
						<a class="btn2-w3-agileits" href="#myModal3" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Register</a>
					</div> -->
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">	
					<h3>Questions....?</h3>
					<p>+0 123 456 789<p>
					<p><a href="mailto:info@example.com">mail@example.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--//footer-->	
<!-- copy-right -->
		<div class="copyright-wthree">
			<div class="container">
				<ul class="b-nav">
					<li><a href="#home">Home</a></li>
					<li><a href="about.html" >About</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				<p>&copy; 2017 Deterge . All Rights Reserved </p>
			</div>
		</div>
<!-- //copy-right -->
<!-- modal -->
	
	<!-- //modal --> 
	<!-- modal -->
	
	<!-- //modal --> 
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/ziehharmonika.js"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: ''
		});
	});
</script>

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
<!-- Starts-Number-Scroller-Animation-JavaScript -->		
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //Starts-Number-Scroller-Animation-JavaScript -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>