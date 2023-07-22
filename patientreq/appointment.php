<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MediHub</title>

  <link rel="stylesheet" href="../CSS/home.css">
  <link rel="stylesheet" href="../CSS/register.css">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <!--header section-->
  <section class="header1">
    <a href="home.php" class="logo">MediHub.</a>
    <nav class="navbar">
      <a href="../home.php">home</a>
      <a href="../about.php">about</a>
      <a href="../services.php">services</a>

      <a href="../contact.php">Contact</a>


    </nav>

    <a href="../logout.php" class="btn btn-primary btn-lg">logout</a>
    <div id="menu-btn" class="fas fa-bars "></div>
    <div class="username" class="username"><?php echo $_SESSION["fname"]; ?> <?php echo $_SESSION["lname"]; ?></div>
  </section>

  <div class="offcanvas offcanvas-start" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title"> <i class="fa-solid fa-hospital"></i> NAVIGATION</h1>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
                <li><a href="../users/patient.php"
                        class="link-info link-offset-2 link-underline-opacity-100-hover"> <i class="fa-solid fa-hospital-user"></i><b>PATIENT'S DASHBOARD</b> </a></li>
                <br />
                <br />
                <li><a href="../patientreq/regdetails.php"
                        class="link-info link-offset-2 link-underline-opacity-100-hover"> <i class="fa-solid fa-id-card-clip"></i> <b>REGISTRATION FORM</b> </a></li>
                <br />
                <br />
                <li><a href="../patientreq/prescription.php"
                        class="link-info link-offset-2  link-underline-opacity-100-hover"> <i class="fa-solid fa-prescription-bottle"> </i><b> PRESCRIPTION</b></a></li> <br />
                <br />


            </ul>

        </div>
        </div>
        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">☰ NAVIGATION
        </button>

        <script src="../js/new.js"></script>

        


        <section class="vh-100 gradient-custom">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-4 px-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">BOOK AN APPOINTMENT</h3>
          <form action="process_appointment.php" method="post"> <!-- Change the form action to point to the PHP script -->

            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-group">
                  <select class="form-select" name="speciality" aria-label="Default select example">
                    <option selected>Preferred Speciality</option>
                    <option value="Physician">Physician</option>
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Dentist">Dentist</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-group">
                  <select class="form-select" name="doctor" aria-label="Default select example">
                    <option selected>Preferred Doctor</option>
                    <option value="Brett">Brett</option>
                    <option value="Laura">Laura</option>
                    <option value="Nicole">Nicole</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4 d-flex align-items-center">
                <div class="form-outline datepicker w-100">
                  <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                  <input type="date" name="date" id="date" class="form-control form-control-lg" />
                  <label class="form-label" for="Date">Preferred Date </label>
                </div>
              </div>
              <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                  <input type="time" name="time" id="time" class="form-control form-control-lg" />
                  <label class="form-label" for="time">Preferred Time</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="name" id="name" class="form-control form-control-lg" />
                  <label class="form-label" for="name">Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="tel" name="number" id="number" class="form-control form-control-lg" />
                  <label class="form-label" for="number">Phone Number</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                  <input type="email" name="email" id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="emailAddress">Email</label>
                </div>
              </div>
              <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline mb-0">
                  <textarea name="message" class="form-control mb-0 border-top-0 border-right-0 border-left-0" id="message" cols="30" rows="10" placeholder="Message" style="overflow: hidden; outline: none;" tabindex="1"></textarea>
                </div>
              </div>
            </div>

            <div class="mt-4 pt-2">
              <input class="btn btn-primary btn-lg" type="submit" value="Make an Appointment" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
</div>

  <section class="footer">


<div class="box-container">

    <div class="box">
        <h3>quick links </h3>
        <a href="../home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="../about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="../services.php"><i class="fas fa-angle-right"></i>services</a>

        <a href="../contact.php"><i class="fas fa-angle-right"></i>contact</a>
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