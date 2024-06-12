<?php
 include 'db.php';
   $id = $_GET['id'];
   $sel= "SELECT * FROM add_product  WHERE id='$id'";
   $ex = mysqli_query($con,$sel);
   $row = mysqli_fetch_array($ex);
   $res = array();
   $res = $row;
   echo json_encode($res); 
 ?>