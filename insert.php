<?php
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";
if(isset($_POST["item_name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=testing4", "root", "");
 $order_id = uniqid();
 for($count = 0; $count < count($_POST["item_name"]); $count++)
 {  
  $query = "INSERT INTO tbl_order_items 
  (order_id, item_name, item_quantity, item_unit, email, presentdate) 
  VALUES (:order_id, :item_name, :item_quantity, :item_unit, :email, NOW())
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':order_id'   => $order_id,
    ':item_name'  => $_POST["item_name"][$count], 
    ':item_quantity' => $_POST["item_quantity"][$count], 
    ':item_unit'  => $_POST["item_unit"][$count],
    ':email'   => $email
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>