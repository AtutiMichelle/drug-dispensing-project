<?php
require_once("../db_connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!--header section-->
    <section class="header1">
        <a href="home.php" class="logo">MediHub.</a>
        <nav class="navbar">
            <a href="../home.php">home</a>
            <a href="../about.php">about</a>
            <a href="../services.php">services</a>

            <a href="../contact.php">Contact</a>


        </nav>

        <a href="../login/logout.php" class="btn btn-primary btn-lg">logout</a>
        <div id="menu-btn" class="fas fa-bars "></div>
        <div class="username" class="username"><?php echo $_SESSION["name"]; ?></div>
    </section>
    <div class="offcanvas offcanvas-start" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title"><i class="fa-solid fa-hospital"></i>NAVIGATION</h1>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
            <li><a href="../pharmreq/drugpurchase.php"class="link-info link-offset-2 link-underline-opacity-100-hover"><i class="fa-solid fa-file-medical"></i><b> DRUG PURCHASE</b></a></li> <br />
        <br />
                <li><a href="../pharmreq/drugsdisp.php"
                        class="link-info link-offset-2 link-underline-opacity-100-hover"> <i
                            class="fa-solid fa-hand-holding-medical"></i> <b> DRUG DISPENSING</b></a></li> <br />
                <br />
                <li><a href="../pharmreq/drugpurchasetbl.php"
                        class="link-info link-offset-2 link-underline-opacity-100-hover"> <i
                         class="fa-solid fa-file-medical"></i> <b> DRUG PURCHASE TABLE</b></a></li> <br />
                <br />
                <li><a href="../users/pharmacy.php"
                        class="link-info link-offset-2 link-underline-opacity-100-hover"><i class="fa-solid fa-circle-h"></i> <b> PHARMACY DASHBOARD</b></a></li> <br />
                <br />
                <li><a href="../pharmreq/inventory.php"
                        class="link-info link-offset-2  link-underline-opacity-100-hover"><i
                            class="fa-solid fa-pager"></i> <b> INVENTORY</b></a></li> <br />
                <br />
             

            </ul>

        </div>
    </div>
    <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        ☰ NAVIGATION
    </button>
   

    <script src="../js/new.js"></script>
   
            
    
            <h2 class="fs-1 m-2">Prescription</h2>
            <table class="table table-bordered table-striped">
  
  <thead>
    <tr>
    <th scope="col">Prescription ID</th>
      <th scope="col">Patient ID</th>
      <th scope="col">Drug Name</th>
      <th scope="col">Prescription Description</th>
      <th scope="col">Expiration date</th>
      <th scope="col">frequency</th>
      <th scope="col">duration</th>
      
      
     
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="SELECT * from prescription";
  $result=mysqli_query($conn,$sql);

  if($result){ 
    while(
    $row=mysqli_fetch_assoc($result)){
        $prescription_id = $row["prescription_id"];
        $patient_id = $row["patient_id"];
        $name = $row["name"];
        $prescription_description = $row["prescription_description"];
        $expiration_date = $row["expiration_date"];
        $frequency = $row["frequency"];
        $duration = $row["duration"];

        echo'<tr>
        <th scope="row">'.$prescription_id.'</th>
        <td>'.$patient_id.'</td>
        <td>'.$name.'</td>
        <td>'. $prescription_description.'</td>
        <td>'.$expiration_date.'</td>
        <td>'. $frequency.'</td>
        <td>'.$duration.'</td>
        
        
        <td>
    
        
    </td>
      </tr>';
         
    }
    
  }
  
  
  ?>


    
  </tbody>
</table>
</div>
 
 </body>
 </html>