<?php
session_start();
require_once("../db_connection.php");

if (isset($_POST["name"])  && isset($_POST["type"]) && isset($_POST["price"]) && isset($_POST["quantity"]) && isset($_POST["exp_date"]) && isset($_POST["man_date"]) && isset($_POST["company"])) {
    $name = $_POST["name"];
    $type = $_POST["type"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $exp_date = $_POST["exp_date"];
    $man_date = $_POST["man_date"];
    $company = $_POST["company"];

    $sql = "INSERT INTO drugs (name, type, price, quantity, exp_date, man_date, company) 
            VALUES ('$name',' $type' ,'$price', '$quantity', '$exp_date', '$man_date', '$company')";

    if ($conn->query($sql) === TRUE) {
        echo "Drug added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // echo "Please provide all the required information.";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediHub</title>
     <!--swiper css link-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <!--font awesome css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/register.css">
    
   

</head>
<body>


<!--header section-->
<section class="header1">
<a href="home.php" class="logo">MediHub.</a>
<nav class="navbar">
    <a href="../home.php">home</a>
    <a href="../about.php">about</a>
    <a href="../services.php">services</a>
   
    <a href="../contact.php">Contact</a>
    
    
</nav>

<a href="../login/logout.php" class="btn">logout</a>
<a href="../CRUD/Drugs/display.php" class="btn">Update Drugs</a>


<div id="menu-btn" class="fas fa-bars "></div>
<div class="username" class="username"><?php echo $_SESSION["name"]; ?></div>
</section>
<div class="background" style="background=url(../images/silde3.jpg)"></div>
 <div class="container">
    <div class="content">
    <h2 class="logo"><i class="fa fa-heartbeat" aria-hidden="true"></i>MediHub</h2>
         
    <div class="text-sci">
        <h2>Welcome Back <br>Add New Drugs here <span></span></h2>
       
             <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i>></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></i></a>
                
             </div>
    </div>
    </div>
    <div class="logreg-box">
        <div class="form-box login">
        <form action="#" method="POST">
                <h2>Add Drugs</h2>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-pills"></i></span>
                    <input type="text" id="name" name="name"required>
                    <label for="name">Drug Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-pills"></i></span>
                    <input type="text" id="type" name="type"required>
                    <label for="type">Drug Type</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-dollar-sign"></i></span>
                    <input type="price" id="price" name="price"required>
                    <label  for="price">Drug Price</label>
                    </div>
                    <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-grip-vertical"></i></span>
                    <input type="number" id="quantity" name="quantity"required>
                    <label for="quantity" >Drug Quantity</label>
                    </div>

                    <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                    <input type="date" id="exp_date" name="exp_date"required>
                    <label for="date" >Drug Expiration Date</label>
                    </div>

                    <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                    <input type="date" id="man_date" name="man_date" required>
                    <label for="date" >Drug Manufacturing  Date</label>
                    </div>


                    
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-building"></i></span>
                    <input type="text" id="company" name="company"required>
                    <label for="company" >Drug Company</label>
                </div>
<br>
<br>
                <div class="radio">
                   <div> <span class="icon"></i></span>
                  
                   
  
</div>

            
            </div> 
             
            
                <a href="signin.php"><button type="submit" class="btn">Submit</button></a>

                <!-- <div class="login-register">
                    <p>Already Have an Account? <a href="signin.php" class="register-link">Sign In</a></p>
                </div> -->
            </form>
        </div>
        </div>
        
    </div>
    
    </div>
    