<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argentum</title>
     <!--swiper css link-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <!--font awesome css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/home.css">
</head>
<body>
<!--header section-->
<section class="header">
<a href="home.php" class="logo">Argentum.</a>
<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    
    
    <a href="contact.php">contact</a>
    

</nav>
<div class="dropdown">
            <button class="dropbtn">Sign In <i class="fas fa-caret-down"></i></button>
            <div class="dropdown-content">

          <a href="login/patient_login.php">Patient Sign-In</a>

                <a href="login/doctor_login.php">Doctor Sign-In</a>
                <a href="#">Supervisor Sign-In</a>
                <a href="login/admin_login.php">Administrator Sign-In</a>
                <a href="#">Pharmacy Sign-In</a>
                <a href="login/pharmcomp_login.php">Pharmaceutical Company Sign-In</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Sign Up <i class="fas fa-caret-down"></i></button>
            <div class="dropdown-content">
           <a href="login/register_patient.php">Patient Sign-Up</a>

                <a href="login/register_doctor.php">Doctor Sign-Up</a>
                <a href="#">Supervisor Sign-Up</a>
                <a href="login/register_admin.php">Administrator Sign-Up</a>
                <a href="#">Pharmacy Sign-Up</a>
                <a href="login/register_pharmcomp.php">Pharmaceutical Company Sign-Up</a>
            </div>
        </div>

<div id="menu-btn" class="fas fa-bars "></div>
</section>
<!--header section-->

<div class="heading" style="background:url(images/footer2.webp) no repeat">
<h1>services</h1>
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