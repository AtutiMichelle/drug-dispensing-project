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
    <!--swiper css link-->

    <!--font awesome css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
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
       
        <div class="offcanvas offcanvas-start" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title"><i class="fa-solid fa-hospital"></i>NAVIGATION</h1>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
            <li><a href="../pharmreq/drugpurchase.php"
                        class="link-info link-offset-2 link-underline-opacity-100-hover"> <i
                         class="fa-solid fa-file-medical"></i> <b> DRUG PURCHASE </b></a></li> <br />
                <br />
                <li><a href="../pharmreq/drugsdisp.php"
                        class="link-info link-offset-2 link-underline-opacity-100-hover"> <i
                            class="fa-solid fa-hand-holding-medical"></i> <b> DRUG DISPENSING</b></a></li> <br />
                <br />
                <li><a href="../users/pharmacy.php"
                        class="link-info link-offset-2 link-underline-opacity-100-hover"><i class="fa-solid fa-circle-h"></i> <b> PHARMACY DASHBOARD</b></a></li> <br />
                <br />
                <li><a href="../pharmreq/inventory.php"
                        class="link-info link-offset-2  link-underline-opacity-100-hover"><i
                            class="fa-solid fa-pager"></i> <b> INVENTORY</b></a></li> <br />
                <br />
                <li><a href="../pharmreq/prescription.php"
                        class="link-info link-offset-2  link-underline-opacity-100-hover"><i
                            class="fa-solid fa-prescription-bottle"></i> <b> PRESCRIPTION</b></a></li> <br />
                <br />

            </ul>

        </div>
    </div>
    <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        ☰ NAVIGATION
    </button>
    <div class="username" class="username"><?php echo $_SESSION["name"]; ?></div>
    <script src="../js/new.js"></script>
    </section>
    


 
    <button class="btn btn-primary my-5"><a href="inventory.php" class="text-light"> Add Drugs</a></button>

    <table class="table table-striped">
      <thead>
        <tr>

          <th scope="col">Drug ID</th>
          <th scope="col">Drug Name</th>
          <th scope="col">Drug Type</th>
          <th scope="col">Drug Price</th>
          <th scope="col">Drug Quantity</th>
          <th scope="col">Drug Expiration Date</th>
          <th scope="col">Drug Manufacturing Date</th>
         
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "SELECT * from inventory";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          while (
            $row = mysqli_fetch_assoc($result)
          ) {
            $id = $row['id'];
            $name = $row['name'];
            $type = $row['type'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            $exp_date = $row['exp_date'];
            $man_date = $row['man_date'];
           

            echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $name . '</td>
        <td>' . $type . '</td>
        <td>' . $price . '</td>
        <td>' . $quantity . '</td>
        <td>' . $exp_date . '</td>
        <td>' . $man_date . '</td>
        
        
        <td>
        <button class="btn btn-outline-info"><a href="update.php?updateid=' . $id . '" class="text-dark">Update</a></button>
        <button class="btn btn-outline-danger"><a href="delete.php?deleteid=' . $id . '" class="text-dark">Delete</a></button>
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