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
    
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
      



</head>

<body style="display:block; align-items:center; justify-content:center;">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!--header section-->
    <section class="header1">
        <a href="../home.php" class="logo">MediHub.</a>
        <nav class="navbar">
            <a href="../home.php">home</a>
            <a href="../about.php">about</a>
            <a href="../services.php">services</a>

            <a href="../contact.php">Contact</a>


        </nav>

        <a href="../login/logout.php" class="btn btn-primary btn-lg">logout</a>
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
                <li><a href="../patientreq/appointment.php"
                        class="link-info link-offset-2  link-underline-opacity-100-hover"> <i class="fa-solid fa-pager"></i> <b>APPOINTMENT</b> </a></li> <br />
                
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
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Details</h3>
                        <!-- Add the action attribute and method attribute to the form element -->
                        <form action="submit_registration.php" method="POST">
                            <!-- Form fields with the name attribute -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="firstName" name="firstName"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="firstName">First Name</label>
                                    </div>
                                </div>
                               
    <div class="col-md-6 mb-4">
        <div class="form-outline">
            <input type="text" id="lastName" name="lastName" class="form-control form-control-lg" />
            <label class="form-label" for="lastName">Last Name</label>
        </div>
    </div>
</div>


                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                                        <input type="date" id="date" name="dateOfBirth"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="DateOfBirth">Date of Birth</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class="mb-2 pb-1">Gender: </h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                            value="Female" checked />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                            value="Male" />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <input type="email" id="emailAddress" name="emailAddress"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="emailAddress">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <input type="tel" id="phoneNumber" name="phoneNumber"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="address" name="address"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="address">Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="ID" name="ID" class="form-control form-control-lg" />
                                        <label class="form-label" for="ID">I.D Number/Passport Number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="SSN" name="SSN" class="form-control form-control-lg" />
                                        <label class="form-label" for="SSN">SSN</label>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">Medical History</h4>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="medicalcond" name="medicalcond"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="medicalcond">Known Medical conditions</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class="mb-2 pb-1">Previous surgeries: </h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="previousSurgeries" id="yes"
                                            value="Yes" checked />
                                        <label class="form-check-label" for="yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="previousSurgeries" id="no"
                                            value="No" />
                                        <label class="form-check-label" for="no">No</label>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">Insurance Details</h4>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="insuranceProvider" name="insuranceProvider"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="insuranceProvider">Insurance Provider</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="policyNumber" name="policyNumber"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="policyNumber">Policy Number</label>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">Next of Kin</h4>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" />
                                        <label class="form-label" for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="relationship" name="relationship"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="relationship">Relationship</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="tel" id="rel_phone" name="rel_phone"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="rel_phone">Phone Number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                            </div>
                            <div class="mt-4 pt-2">
                                <input class="btn btn-primary btn-lg" type="reset" value="Reset" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 


    
</body>
</html>

    