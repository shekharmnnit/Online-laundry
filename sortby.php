<?php

include 'admin_history.php';
if (isset($_GET['sortby'])) {
    $orderby = $_GET['sortby'];
    echo $orderby;
  }
 ?>