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

 ?>
  
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   
</head>
  <body>
    <div class="container">
        <h1 class='bg-dark text-white p-2 text-center'>please provide right info</h1>
        <div class="row">
            <div class="col-lg-8">
                <form method="post">
                  <input class='form-control' type="text" placeholder="user name"> <br>
                  <input class='form-control' type="text" placeholder="user email"> <br>
                  <input class='form-control' type="text" placeholder="user phone"> <br>
                  <input class='form-control' type="text" placeholder="enter city"> <br>

                  <input onchange="Fun1()" type="radio" name="pay" id="cash" value='cash'>    cash on
                  <input  onchange="Fun2()" type="radio" name="pay"id="Mobile_bank" value='Mobile_bank'>  Mobile Banking
                  <input  onchange="Fun3()" type="radio"name="pay"id="bank" value='bank'>   Banking
                  <span id="show"></span>
                  <span id="drop"></span>
                  <br><br> <button class='btn btn-success'>Order Now</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var cash = document.getElementById("cash");
        var Mobile_bank = document.getElementById("Mobile_bank");
        var bank = document.getElementById("bank");
        function Fun1(){
            if(cash.value=='cash'){
               var input = "<input type='text' placeholder='sallor name' name='PaymentSystem' class='form-control'>";
             $("#show").append(input);

             document.getElementById("Mobile_bank").disabled = true;
                document.getElementById("bank").disabled = true;
            }else{
                
            }
        }
        function Fun2(){
            if(Mobile_bank.value=='Mobile_bank'){
               var input = "<input type='text' placeholder='enter payment number' name='PaymentSystem' class='form-control'>";
               var dropdown = "<select  class='form-control' name='paymobBank'><option>Bkash</option><option>Nagad</option><option>Rocket</option></select>";
             
               $("#show").append(input);
               $("#drop").append(dropdown);
             document.getElementById("cash").disabled = true;
                document.getElementById("bank").disabled = true;
            }else{

            }
       }
       function Fun3(){
        if(bank.value=='bank'){
               var input = "<input type='text' placeholder='enter bank/card number' name='PaymentSystem' class='form-control'>";
             $("#show").append(input);
             document.getElementById("cash").disabled = true;
                document.getElementById("Mobile_bank").disabled = true;
            }else{

            }
      }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
