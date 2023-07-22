<?php
// db_connection.php
$conn = mysqli_connect('localhost', 'root', '', 'drugdispenser') or die('Unable to connect');
?>

<!-- The rest of your HTML code -->

<?php
require_once("../db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["SSN"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["dateOfBirth"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $SSN = $_POST["SSN"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $dateOfBirth = $_POST["dateOfBirth"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Hash the password before inserting into the database
     

        $sql = "INSERT INTO patients (SSN, fname, lname, dateOfBirth, email, password) 
                VALUES ('$SSN', '$fname', '$lname', '$dateOfBirth', '$email', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully!";
            header("Location: patientLogin.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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
                <h2>Welcome Back <br>Registration Details<span></span></h2>
                <p>PLEASE REGISTER YOUR PERSONAL DETAILS TO PROCEED</p>

                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></i></a>

                </div>
            </div>
        </div>
        <div class="logreg-box">
            <div class="form-box login">
                <form method="POST">

                    <h2>Registration Details</h2>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="SSN" name="SSN" required>
                        <label for="SSN">SSN</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="fname" name="fname" required>
                        <label for="fname">First Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="lname" name="lname" required>
                        <label for="lname">Last Name</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                        <input type="date" id="date" name="dateOfBirth" required>
                        <label for="date">Date Of Birth</label>
                    </div>


                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>





                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <br>
                    <br>
                    <div class="radio">
                        <div> <span class="icon"></i></span>


                        </div>
                    </div>

                    <a href="patientLogin.php"><button type="submit" class="btn">Submit</button></a>

                    <div class="login-register">
                        <p>Already Have an Account? <a href="patientLogin.php" class="register-link">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>

    </div>

    </div>
    
    </body>
    </html>