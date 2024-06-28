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
    //select check order 
    if(isset($_POST['add_to_cart'])){
         $product_id = $_POST['product_id'];
        
         $check = "SELECT * FROM cart WHERE product_id='$product_id' AND user_id='$user_id' ";
         $resutl = mysqli_query($con,$check);
         $count = mysqli_num_rows($resutl)>0;
         if($count){
          $msg ="product Already added in cart";
         }else{
          $insert = "INSERT INTO cart(product_id,user_id)
          VALUES('$product_id ','$user_id')" ;
          $ex = mysqli_query($con,$insert)  ;
          if($ex){
           $msg ="product added success";
          }else{
           $msg ="product added failed";
          }
         }
       
      
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>U2 Exclusive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Display toaster message
        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right"
            };
            toastr.success('<?php echo $msg ?>');
        });
    </script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" height="30" width="30"  src="img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="product.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $email ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
        <?php 
          $sel = "SELECT * FROM cart WHERE user_id='$user_id'";
          $ex = mysqli_query($con,$sel);
          $num = mysqli_num_rows($ex);
          echo $num;
        ?>
        </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           account
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="account.php">Account History</a></li>
            <li><a class="dropdown-item" href="logout.php">logout</a></li>
            <li><hr class="dropdown-divider"></li>
           
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--carousel-->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="banner" src="img/banner.jpg"  alt="...">
    </div>
    <div class="carousel-item">
      <img class="banner" src="img/banner2.jpg" alt="...">
    </div>
    <div class="carousel-item">
      <img class="banner" src="img/banner3.jpg"  alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--coursel ends here--->


<!--card section starts here-->
    <div class="container mt-5">
        <div class="row">
            <?php 
               $sel = "SELECT * FROM  add_product";
               $ex = mysqli_query($con,$sel);
               while($row=mysqli_fetch_array($ex)){?>
                 <!--for card show -->
                 <div class="col-lg-3 p-2">
                    <form method="post">
                          <div class="card ">
                        <div class="card-img">
                            <img class="c-img" src="Admin/<?php echo  $row['image'] ?>" alt="">       
                        </div>
                        <div class="card-title">
                          <h3 > Name :<?php echo  $row['title'] ?></h3>
                        </div>
                        <div class="card-current-price">
                            <h4>price:<?php echo  $row['current_price'] ?> <span class="text-warning"> <del><?php echo  $row['before_price'] ?></del></span></h4>   
                        </div>
                        <input type="hidden" name="product_id" value="<?php echo $row['id'] ?>" >
                        <div class="card-desc">
                          <p>
                          <?php echo  $row['description'] ?>
                          </p>
                        </div>
                        <div class="add-to-cart">
                          <button name='add_to_cart' class="btn btn-success d-block">add to cart</button>
                        </div>
                    </div>
                    </form>
                </div>

           <?php    }
            ?>
           
        </div>
    </div>
<!--card section here---> 
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  </body>
</html>