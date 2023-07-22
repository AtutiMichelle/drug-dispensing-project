<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form submission, process the appointment
    $SSN = $_POST['SSN'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $datetime = $_POST['datetime'];

    // Perform the SSN validation
    $conn = mysqli_connect('localhost', 'root', '', 'drugdispenser') or die('Unable to connect');
    $selectQuery = "SELECT SSN FROM patients WHERE SSN = '$SSN'";
    $result = mysqli_query($conn, $selectQuery);

    if (!$result || mysqli_num_rows($result) == 0) {
       

        header('Location: home.php');
        exit;
    }

    // User is registered, proceed with the appointment insertion
    // Perform the database insertion
    $insertQuery = "INSERT INTO appointment (SSN, fname, lname, email, datetime) 
                    VALUES ('$SSN', '$fname', '$lname', '$email', '$datetime')";

    if (mysqli_query($conn, $insertQuery)) {
        echo "Appointment data inserted successfully!";
        // Redirect to a success page or perform any additional actions
    } else {
        echo "Error: " . mysqli_error($conn);
        // Handle the error accordingly
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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <!--font awesome css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/home.css">
</head>
<body>
<!--header section-->
<section class="header">
<a href="home.php" class="logo">Medihub.</a>
<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="services.php">services</a>
   
    

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
<h1>contact Now</h1>
</div>

<!--contact section-->
<section class="contact">

<h1 class="heading1">make appointment</h1>

<form action="#" method="POST">
<span>your SSN:</span>
<input type="SSN" name="SSN" id="SSN" placeholder="enter your SSN" class="box">
<span>your First name:</span>
<input type="text" name="fname" id="fname " placeholder="enter your first name" class="box">
<span>your Last name:</span>
<input type="text" name="lname" id="lname " placeholder="enter your last name" class="box">
<span>your email:</span>
<input type="email" name="email" id="email" placeholder="enter your email" class="box">
<span>appointment date:</span>
<input type="datetime-local" name="datetime" id="datetime" class="box">
<a href="home.php"><button type="submit" class="btn">Submit</button></a>

</form>

</section>





<!--contact section-->

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