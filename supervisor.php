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

        <a href="../login/logout.php" class="btn btn primary btn-lg">logout</a>
        <div id="menu-btn" class="fas fa-bars "></div>
        <div class="username" class="username"><?php echo $_SESSION["fname"]; ?> <?php echo $_SESSION["lname"]; ?></div>
    </section>
    <section class="home-about">

<div class="image">
    <img src="../images/aboutus1.webp" alt="">

</div>
<div class="content">
    <h3>CONTRACT</h3>
    <p>Pharmacy: MedicalPharms</br>
    Email address: MedicalPharms@gmail.com</br>
    Contact: 0714384567</br>
    Start Date: Sunday May 22,2021</br>
    End Date: Sunday May 25,2025</br>
    Period :4 year(s)</br></p>
         
</div>
</section>
<section class="home-about">

<div class="image">
    <img src="../images/about1.jpg" alt="">

</div>
<div class="content">
    <h3>CONTRACT</h3>
    <p>Pharmacy: ABCPlace</br>
    Email address: ABCPlace@gmail.com</br>
    Contact: 0711324567</br>
    Start Date: Sunday June 20,2020</br>
    End Date: Sunday May 25,2024</br>
    Period :4 year(s)</br>

         </p>
         
</div>
</section>
<section class="home-about">

<div class="image">
    <img src="../images/about2.jpg" alt="">

</div>
<div class="content">
    <h3>CONTRACT</h3>
    <p>Pharmacy: Mediplan</br>
    Email address: Mediplan@gmail.com</br>
    Contact: 0732324568</br>
    Start Date: Sunday Feb 21,2019</br>
    End Date: Sunday May 25,2023</br>
    Period :5 year(s)</br></p>
         
</div>
</section>
</body>
</html>
