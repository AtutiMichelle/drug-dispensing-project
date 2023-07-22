<?php
require_once("../db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["SSN"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["number"]) && isset($_POST["email"])  && isset($_POST["password"])) {
        
        $SSN = $_POST["SSN"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO admin ( SSN, fname, lname, number, email,  password) 
                VALUES ( '$SSN', '$fname', '$lname', '$number', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully!";
            header("Location: admin_login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please provide all the required information.";
    }
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
<a href="../home.php" class="logo">MediHub.</a>
<nav class="navbar">
    <a href="../home.php">home</a>
    <a href="../about.php">about</a>
    <a href="../services.php">services</a>
   
    <a href="../contact.php">Contact</a>
    

</nav>



<div id="menu-btn" class="fas fa-bars "></div>
</section>
<div class="background" style="background=url(../images/silde3.jpg)"></div>
 <div class="container">
    <div class="content">
    <h2 class="logo"><i class="fa fa-heartbeat" aria-hidden="true"></i>MediHub</h2>
         
    <div class="text-sci">
        <h2>Welcome  <br>Register Here <span></span></h2>
       

             <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></i></a>
                
             </div>
    </div>
    </div>
    <div class="logreg-box">
        <div class="form-box login">
        <form action="register_admin.php" method="POST">

                <h2>Admin registration</h2>
               
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="SSN" id="SSN" name="SSN"required>
                    <label for="SSN">SSN</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="fname" name="fname"required>
                    <label  for="fname">fname</label>
                    </div>
                    <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="lname" name="lname"required>
                    <label for="lname" >lname</label>
                    </div>
                    <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <input type="tel" id="number" name="number"required>
                    <label  for="number">Phone Number</label>
                    </div>
                    
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="text" id="email" name="email"required>
                    <label  for="email">Email</label>
                    </div>

                    
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="text" id="password" name="password"required>
                    <label for="password" >Password</label>
                </div>

                <div class="radio">
                   <div> <span class="icon"></i></span>
                      
  
</div>
            </div> 
             
                <a href="signin.php"><button type="submit" class="btn">Submit</button></a>

                <div class="login-register">
                    <p>Already Have an Account? <a href="admin_login.php" class="register-link">Sign In</a></p>
                </div>
            </form>
        </div>
        </div>
        
    </div>
    
    </div>
    </body>
    </html>