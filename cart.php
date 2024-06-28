<?php
 include 'db.php';
 session_start();
$user_id =  $_SESSION['id'];
$msg="";
 $email="";
 if($_SESSION['email']==true){
    $email=$_SESSION['email'];

 }else{
    header("location:login.php");
 }
  
 if(isset($_POST['update_product'])){
     $qty = $_POST['qty'];
     $product_id = $_POST['product_id'];
     $update = "UPDATE cart SET quantity='$qty' WHERE product_id='$product_id' AND user_id ='$user_id'";
     $ex = mysqli_query($con,$update);
 }

 if(isset($_GET['dlt_id'])){
    $id = $_GET['dlt_id'];
    $dlt = "DELETE FROM cart WHERE id='$id' AND user_id='$user_id' ";
    $e = mysqli_query($con,$dlt);
 }
 if(isset($_GET['alldelete'])){
    mysqli_query($con,"DELETE FROM cart WHERE user_id='$user_id'");
 }
 
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>total cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
     <div class="container ">
        <div class="row">
            <h1 class='bg-success text-white p-2 text-center'>Check Your Items</h1>
          <div class="col-lg-12 mt-3">
             <table class='table'>
                 <th>Id</th>
                 <th>Name</th>
                 <th>Img</th>
                 <th>Price</th>
                <th>Qty</th>
                <th>Grand Total</th>
                <th>Action</th>
                <tbody>
                    <?php 
                    $id=1;
                    $grand_total="";
                    $total = 0 ;
                      $sel = "SELECT add_product.name,add_product.image,
                      add_product.current_price , cart.product_id,cart.user_id,cart.quantity,cart.id 
                      FROM add_product,cart  
                      WHERE add_product.id = cart.product_id AND cart.user_id='$user_id' ";
                      $ex = mysqli_query($con,$sel);
                      while($row=mysqli_fetch_array($ex)){?>
                          <tr>
                            <td><?php echo $id++ ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><img height='100' width='100' src="Admin/<?php echo $row['image'] ?>" alt=""></td>
                            <td><?php echo $row['current_price'] ?></td>
                            <td>
                               <form method="post">
                                  <input type="number" name="qty" max="5" min="1" value="<?php echo $row['quantity'] ?>">
                                  <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
                                  <button name='update_product' class='btn btn-primary'>update</button>
                               </form>
                            </td>
                            <td>
                                <?php 
                                   $grand_total = (int)$row['quantity'] * (int)$row['current_price'];
                                   echo $grand_total;
                                 ?>
                            </td>

                            <td>
                               <a href="cart.php?dlt_id=<?php echo $row['id'] ?>"> <button class='btn btn-danger'>remove</button></a>
                            </td>
                        </tr>
                          
                         <?php  
                             $total += $grand_total;
                         ?>
                       
                 <?php     }

                    ?>

                </tbody>
             </table>
             <h3>Total Taka: <?php  echo $total ?> <a href="order.php"><button class="btn btn-success">Order Now</button> </a></h3>
             <a href="cart.php?alldelete="><button class="btn btn-warning">Remove All product</button></a>
             <br>
            <a href="product.php">continue shopping</a>
            </div>
        
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>