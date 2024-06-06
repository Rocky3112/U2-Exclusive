<?php
 include 'db.php';
  
  $name = $_POST['name'];
  $description = $_POST['description'];
  $current_price = $_POST['current_price'];
  $before_price = $_POST['before_price'];
  $buying_price = $_POST['buying_price'];
  $title = $_POST['title'];
  $file = $_FILES['image']['name'];
  
//   echo "<pre>"; print_r($_FILES);die;
  foreach($file as $key=>$value){
     $file = $_FILES['image']['name'][$key];
     $tmp = $_FILES['image']['tmp_name'][$key];
     move_uploaded_file($tmp,$file);

     $insert = "INSERT INTO add_product(name,description,current_price
     ,before_price,buying_price,title,image)
     VALUES('$name[$key]','$description[$key]','$current_price[$key]',
     '$before_price[$key]', '$buying_price[$key]',  '$title[$key]','".$value."')";

     $exe = mysqli_query($con,$insert);
     if($exe){
        echo "successfull";
     }else{
        echo "failed";
     }
  }
?>

