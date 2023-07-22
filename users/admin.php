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
                <a href="../CRUD/Admin/viewdoctor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>View Doctors</a>
                <a href="../CRUD/Admin/viewpatients.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>View Patients</a>
                <a href="../CRUD/Admin/viewpharmcomp.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>View Pharmaceutical Companies</a>
                <a href="../CRUDAdmin/viewpharmacies.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>  View Pharmacies</a>
                <a href="../CRUD/Admin/viewsupervisor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>View Supervisors</a>
               
                <a href="../login/logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
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
        
            <a href="../CRUD/Admin/viewadmin.php" ><div class="card">
            <div class="card-content">               
                <div class="card-name">Admins</div>
            </div>            
        </div></a>

        <a href="../CRUD/Admin/viewpatients.php"><div class="card">
            <div class="card-content">                
                <div class="card-name">Patients</div>
            </div>            
            </div></a>

        <a href="../CRUD/Admin/viewdoctor.php" ><div class="card">
            <div class="card-content">
                
                <div class="card-name">Doctors</div>
            </div>
        </div></a>

        <a href="../CRUD/Admin/viewsupervisor.php" > <div class="card">
            <div class="card-content">
                <div class="card-name">Supervisors</div>
            </div>
        </div></a>

        <a href="../CRUD/Admin/viewpharmacies.php" > <div class="card">
            <div class="card-content">                
                <div class="card-name">Pharmacies</div>
            </div>            
        </div></a>


        <a href="../CRUD/Admin/viewpharmcomp.php" >  <div class="card">
       <div class="card-content">
               
               <div class="card-name">Pharmaceutical Companies</div>
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