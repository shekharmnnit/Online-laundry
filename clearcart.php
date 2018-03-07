<?php
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";
unset($_SESSION['item_name']);
unset($_SESSION['item_quantity']);
unset($_SESSION['item_unit']);
header('Location: member.php');

?>