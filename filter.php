<?php  
 //filter.php  
session_start();
if(!isset($_SESSION['email']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";



 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "testing4");  
      $email=$_SESSION['email'];
      $output = '';  
      $name=1;
      $query = "  
           SELECT * FROM tbl_order_items  
           WHERE email='$email'AND item_name BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."' ";  
      // order_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'
      // email='$email' AND password='$password'
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">Customer Name</th>  
                     <th width="43%">Item</th>  
                     <th width="10%">Value</th>  
                     <th width="12%">Order Date</th>  
                </tr>  
      ';  
      echo "string";
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
               
                $output .= '  
                     <tr>  
                          <td>'. $row["order_id"] .'</td>  
                          <td>'. $row["email"] .'</td>  
                          <td>'. $row["item_quantity"] .'</td>  
                          <td>$ '. $row["item_unit"] .'</td>  
                          <td>'. $row["item_name"] .'</td>  
                     </tr>  
                ';
                
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }


 // foreach($myArray as $my_Array){echo $my_Array.'<br>';}  
 ?>

