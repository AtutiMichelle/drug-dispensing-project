<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'drugdispenser') or die('Unable to connect');

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = mysqli_query($conn, "SELECT id, email, password FROM supervisor WHERE email='$email' AND password='$password'");

    $row = mysqli_fetch_array($select);

    if (is_array($row)) {
        $_SESSION["id"] = $row["id"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["name"] = $row["name"];

        header("Location: ../users/supervisor.php");
        exit();
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid email or password");';
        echo 'window.location.href="../home.php";';
        echo '</script>';
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
<div class="background"></div>
 <div class="container">
    <div class="content">
    <h2 class="logo"><i class="fa fa-heartbeat" aria-hidden="true"></i>MediHub</h2>
         
    <div class="text-sci">
        <h2>Welcome! <br> <span>To our  Website</span></h2>
        <p>Please provide your Details to proceed with the login</p>

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
                <h2>Supervisor Login</h2>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="email" required>
                    <label >Email</label>
                </div>
            
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" required>
                    <label >Password</label>
                </div>
                <div class="remember-forgot">
                    <label ><input type="checkbox">Remember Me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Sign In</button>

                <div class="login-register">
                    <p>Dont Have an Account? <a href="regSupervisor.php" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
        </div>
        
    </div>
    
    </div>
    
    

 















<!--footer section-->
 <section class="footer">

    <div class="box-container">

        <div class="box">
        <h3>quick links </h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
    <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
    <a href="services.php"><i class="fas fa-angle-right"></i>services</a>
   
    <a href="contact.php"><i class="fas fa-angle-right"></i>contact</a> 
    </div>
    <div class="box">
        <h3>extra links </h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
    <a href="#"><i class="fas fa-angle-right"></i>about us</a>
    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
    <a href="#"><i class="fas fa-angle-right"></i>terms of use</a> 
    </div>
    <div class="box">
        <h3>contact info </h3>
        <a href="#"><i class="fas fa-phone"></i>+254-123-8765</a>
    <a href="#"><i class="fas fa-phone"></i>+254-123-1234</a>
    <a href="#"><i class="fas fa-envelope"></i>argentum@gmail.com</a>
    <a href="#"><i class="fas fa-envelope"></i>shawntel@gmail.com</a>
    </div>
    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
    <a href="#"><i class="fab fa-instagram"> </i>Instagram</a>
    <a href="#"><i class="fas fa-linkedin"></i>Linked In</a>
    </div>
    </div>
    <div class="credit">created by <span>Shawntel Muthee</span>| all rights reserved |</div>
</section>
 






<!--footer section-->
    <!--swiper js file link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
     <!--custom js file link-->
<script src="js/script.js"></script>
    
</body>
</html>