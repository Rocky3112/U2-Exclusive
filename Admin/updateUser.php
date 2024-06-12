<?php
 include 'db.php';
  
  $name = $_POST['name'];
  $description = $_POST['description'];
  $current_price = $_POST['current_price'];
  $before_price = $_POST['before_price'];
  $buying_price = $_POST['buying_price'];
  $title = $_POST['title'];
 
  $id= $_POST['id'];
  
  $file = $_FILES['image']['name'];
     $tmp = $_FILES['image']['tmp_name'];
     move_uploaded_file($tmp,$file);
     
     $update = "UPDATE add_product SET name='$name',description='$description',current_price='$current_price',
    before_price='$before_price',buying_price='$buying_price',title='$title',image='$file' WHERE id='$id' ";


     $ex = mysqli_query($con,$update);
     if($ex){
        echo "success";
     }else{
        echo "failed";
     }
  
?>

