<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$con) {
    echo("Connection failed: " . mysqli_connect_error());
} else {
    // echo "<script>alert('Connected successful')</script>";
}
?>