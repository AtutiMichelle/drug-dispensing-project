<?php

session_start();
$conn= mysqli_connect('localhost','root','','drugdispenser') or die('Unable to connect');
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
    <link rel="stylesheet" href="CSS/home.css">
   

</head>
<body>


<!--header section-->
<section class="header">
<a href="home.php" class="logo">MediHub.</a>
<nav class="navbar">
    
    <a href="about.php">about</a>
    <a href="services.php">services</a>
    <a href="contact.php">Contact</a>
   
   
    
    </nav>
    <div class="dropdown">
            <button class="dropbtn">Sign In <i class="fas fa-caret-down"></i></button>
            <div class="dropdown-content">

          <a href="login/patientLogin.php">Patient Sign-In</a>

                <a href="login/doctor_login.php">Doctor Sign-In</a>
                <a href="login/supervisorLogin.php">Supervisor Sign-In</a>
                <a href="login/admin_login.php">Administrator Sign-In</a>
                <a href="login/pharmacyLogin.php">Pharmacy Sign-In</a>
                <a href="login/pharmcomp_login.php">Pharmaceutical Company Sign-In</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Sign Up <i class="fas fa-caret-down"></i></button>
            <div class="dropdown-content">
           <a href="login/registerPatient.php">Patient Sign-Up</a>

                <a href="login/register_doctor.php">Doctor Sign-Up</a>
                <a href="login/regSupervisor.php">Supervisor Sign-Up</a>
                <a href="login/register_admin.php">Administrator Sign-Up</a>
                <a href="login/regPharmacy.php">Pharmacy Sign-Up</a>
                <a href="login/register_pharmcomp.php">Pharmaceutical Company Sign-Up</a>
            </div>
        </div>
<!-- <a href="login/signin.php" class="btn">Sign-In</a>
<a href="login/registration.php" class="btn">Sign-Up</a> -->

<div id="menu-btn" class="fas fa-bars ">

    </section>

<!--header section-->

<!--home section-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/slide1.jpg) no-repeat">
        <div class="content">
            <span>Essential Care</span>
            <h3>Your Digital Gateway to Medication and Hospital Services</h3>
           
            <br>
            <a href="contact.php" class="btn">Make Appointment</a>
            
           
        </div>
        </div>
        <div class="swiper-slide slide" style="background:url(images/slide2.webp) no-repeat">
        <div class="content">
        <span>Health Link</span>
            <h3>Enhancing Your Wellbeing with Medication and Hospital Support.</h3>
          
            <br>
            <a href="contact.php" class="btn">Make Appointment</a>

            
            
        </div>
        </div>
        </div>
        <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
</section>





<!--home section-->

<!--services section-->
<section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/appointment.png" alt="">
            <h3>Online Appointment Booking</h3>
        </div>
        <div class="box">
            <img src="images/pillrem2.jpg" alt="">
            <h3>Medication Reminders</h3>
</div>
<div class="box">
            <img src="images/monitor1.jpg" alt="">
            <h3>Health Monitoring and Reporting</h3>
</div>
<!-- <div class="box">
            <img src="images/hospital2.png" alt="">
            <h3>tour guide</h3>
</div>
<div class="box">
            <img src="images/hospital2.png" alt="">
            <h3>tour guide</h3>
</div>
<div class="box">
            <img src="images/hospital2.png" alt="">
            <h3>tour guide</h3>
</div> -->
    </div>

</section>
<!--services section-->

<!--home about section-->

<section class="home-about">

<div class="image">
    <img src="images/aboutus1.webp" alt="">

</div>
<div class="content">
    <h3>About Us</h3>
    <p>At Medihub, our mission is to provide exceptional medical care and support to our community. 
        With a legacy of excellence, our dedicated team of physicians, nurses, and staff are committed to delivering the highest standards of healthcare.
         We offer a comprehensive range of specialties, utilizing advanced technology and personalized treatment plans to meet each patient's unique needs. 
         Your well-being is our priority, and we strive to create a comforting environment where you can feel safe and cared for. 
        Trust us to be your partner on your journey to wellness.</p>
         <a href="about.php" class="btn">Learn More</a>
</div>
</section>

<!--home about section-->

















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