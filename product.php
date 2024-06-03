<?php
 include 'db.php';
 session_start();
 $email="";
 if($_SESSION['email']==true){
    $email=$_SESSION['email'];

 }else{
    header("location:login.php");
 }

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>U2 Exclusive</title>
    <link rel="stylesheet" href="index.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
       
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white position-fixed z-2 w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo" src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="product.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="account.php">Account</a></li>
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $email ?></a>
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
    <div id="carouselExampleIndicators" class="carousel slide py-5">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="banner" src="img/banner2.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="banner" src="img/banner.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="banner" src="img/banner3.jpg" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--coursel ends here--->


    <!--card section starts here-->
    <div class="container my-5">
        <div class="row row-gap-5">
            <div class="col-lg-3 gap-3">
                <div class="card">
                    <div class="card-img">
                        <img class="c-img" src="img/c2.webp" alt="">
                    </div>
                    <div class="card-title">
                        <h3> Name : T-shirt</h3>
                    </div>
                    <div class="card-current-price">
                        <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>
                    </div>

                    <div class="card-desc">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a,
                            
                        </p>
                    </div>
                    <div class="add-to-cart">
                        <button class="btn btn-success d-block">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="c-img" src="img/c7.webp" alt="">
                    </div>
                    <div class="card-title">
                        <h3> Name : T-shirt</h3>
                    </div>
                    <div class="card-current-price">
                        <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>
                    </div>

                    <div class="card-desc">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a,
                            
                        </p>
                    </div>
                    <div class="add-to-cart">
                        <button class="btn btn-success  d-block">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="c-img" src="img/c4.webp" alt="">
                    </div>
                    <div class="card-title">
                        <h3> Name : T-shirt</h3>
                    </div>
                    <div class="card-current-price">
                        <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>
                    </div>

                    <div class="card-desc">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a,
                            
                        </p>
                    </div>
                    <div class="add-to-cart">
                        <button class="btn btn-success  d-block">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="c-img" src="img/c1.webp" alt="">
                    </div>
                    <div class="card-title">
                        <h3> Name : T-shirt</h3>
                    </div>
                    <div class="card-current-price">
                        <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>
                    </div>

                    <div class="card-desc">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a,
                            
                        </p>
                    </div>
                    <div class="add-to-cart">
                        <button class="btn btn-success  d-block">Add To Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="c-img" src="img/c5.webp" alt="">
                    </div>
                    <div class="card-title">
                        <h3> Name : T-shirt</h3>
                    </div>
                    <div class="card-current-price">
                        <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>
                    </div>

                    <div class="card-desc">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a,
                            
                        </p>
                    </div>
                    <div class="add-to-cart">
                        <button class="btn btn-success d-block">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="c-img" src="img/c6.webp" alt="">
                    </div>
                    <div class="card-title">
                        <h3> Name : T-shirt</h3>
                    </div>
                    <div class="card-current-price">
                        <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>
                    </div>

                    <div class="card-desc">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a,
                            
                        </p>
                    </div>
                    <div class="add-to-cart">
                        <button class="btn btn-success  d-block">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="c-img" src="img/c2.webp" alt="">
                    </div>
                    <div class="card-title">
                        <h3> Name : T-shirt</h3>
                    </div>
                    <div class="card-current-price">
                        <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>
                    </div>

                    <div class="card-desc">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a,
                            
                        </p>
                    </div>
                    <div class="add-to-cart">
                        <button class="btn btn-success  d-block">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="c-img" src="img/c8.webp" alt="">
                    </div>
                    <div class="card-title">
                        <h3> Name : T-shirt</h3>
                    </div>
                    <div class="card-current-price">
                        <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>
                    </div>
                    <div class="card-desc">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum quas assumenda beatae
                           
                        </p>
                    </div>
                    <div class="add-to-cart">
                        <button class="btn btn-success  d-block">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--card section end here--->


    <!-- Footer -->
    <footer class="footer bg-dark text-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat elit nec ex fermentum, ut
                    aliquet eros hendrerit.</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <address>
                    <strong>Address:</strong><br>
                    123 Ecommerce Street,<br>
                    City, Country<br>
                    <strong>Email:</strong> info@example.com<br>
                    <strong>Phone:</strong> +123-456-7890
                </address>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2024 Your Ecommerce. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-md-right">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>