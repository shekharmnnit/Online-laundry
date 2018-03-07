<?php
session_start();
session_destroy();
unset($_SESSION['email']);
echo "<script>alert('You have been logged out successfully');window.location='index.php';</script>";
		
?>