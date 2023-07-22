<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../CSS/admin.css" />
    <link rel="stylesheet" href="../CSS/home.css">

    <title>MediHub Admin</title>
</head>

<body>
<section class="header">
<a href="home.php" class="logo">MediHub.</a>
<nav class="navbar">
<a href="../../home.php">home</a>
    <a href="../../about.php">about</a>
    <a href="../../services.php">services</a>
   
    <a href="../../contact.php">Contact</a>
    
    </nav>
    <a href="../login/logout.php" class="btn">logout</a>
   
    </section>
   
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
               
                <a href="../patientreq/regdetails.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-id-card-clip"></i></i>Registration Form</a>
               
                <a href="../patientreq/appointment.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-pager"></i> Appointment</a>
                <a href="../patientreq/prescription.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"> <i class="fa-solid fa-prescription-bottle"> </i>Prescription</a>
               
                
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-1 me-3" id="menu-toggle"></i>
                    <h2 class="fs-1 m-2">Dashboard</h2>
                    
                    
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>      
                                <?php echo  $_SESSION['fname'];?>   <?php echo  $_SESSION['lname'];?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                
                                <li><a class="dropdown-item" href="../login/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="cards">
        
          
        <a href="../patientreq/regdetails.php" ><div class="card">
            <div class="card-content">               
                <div class="card-name">Registration Form</div>
            </div>            
        </div></a>

      
            <div class="card-content">    
                
        <a href="../patientreq/appointment.php" ><div class="card">            
                <div class="card-name">Appointments</div>
            </div>            
            </div></a>

        <a href="../patientreq/prescription.php" ><div class="card">
            <div class="card-content">
                
                <div class="card-name">Prescriptions</div>
            </div>
        </div></a>

       

       


        
        
       
    </div>
       
    </div> 
    
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>