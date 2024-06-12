<?php
 include 'db.php';
  $id = $_GET['id'];
  $del = "DELETE FROM add_product WHERE id ='$id'";
  $exe = mysqli_query($con,$del);
  if($exe){
    echo "successfully Deleted";

  }else{
    echo "failed";
  }

 ?>