<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'drugdispenser') or die('Unable to connect');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediHub</title>
    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!--font awesome css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/register.css">



</head>

<body>


    <!--header section-->
    <section class="header1">
        <a href="home.php" class="logo">MediHub.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="services.php">services</a>

            <a href="contact.php">Contact</a>


        </nav>


        <div id="menu-btn" class="fas fa-bars "></div>
    </section>
    <div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="logo"><i class="fa fa-heartbeat" aria-hidden="true"></i>MediHub</h2>

            <div class="text-sci">
                <h2>Welcome! <br> <span>To our new Website</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, ad.
                    Minima ipsam ad neque dolorem.</p>

                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i>></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></i></a>

                </div>
            </div>
        </div>
        <div class="logreg-box">
            <div class="form-box login">
                <form action="form_info.php" method="POST">
                    <h2>Sign Up</h2>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="SSN" id="SSN" name="SSN" required>
                        <label for="SSN">SSN</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="fname" id="fname" name="fname" required>
                        <label for="fname">fname</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="lname" id="lname" name="lname" required>
                        <label for="lname">lname</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" id="email" name="email" required>
                        <label for="email">email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                        <input type="date" id="date" name="DateOfBirth" required>
                        <label for="date">DateOfBirth</label>
                    </div>


                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <br>
                    <br>
                    <div class="radio">
                        <div> <span class="icon"><i class="fa-solid fa-user-tie"></i></span>


                            <label for="usertype">User Type:</label>
                            <select id="usertype" name="usertype">
                                <option value="admin">Admin</option>
                                <option value="Ptient">Patient</option>
                                <option value="doctor">Doctor</option>
                                <option value="pharmacist">Pharmacist</option>
                                <option value="pharmaceutical company">Pharmaceutical company</option>
                                <option value="Supervisor">Supervisor</option>


                            </select>
                        </div>


                    </div>
                    <br>
                    <br>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms & condtions</label>

                    </div>
                    <a href="signin.php"><button type="submit" class="btn">Submit</button></a>

                    <div class="login-register">
                        <p>Already Have an Account? <a href="signin.php" class="register-link">Sign In</a></p>
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