<?php
session_start();
require_once("../db_connection.php");

if (isset($_POST["name"]) && isset($_POST["type"]) && isset($_POST["amount"]) && isset($_POST["price"]) && isset($_POST["quantity"]) && isset($_POST["exp_date"]) && isset($_POST["man_date"])) {
    $name = $_POST["name"];
    $type = $_POST["type"];
    $amount = $_POST["amount"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $exp_date = $_POST["exp_date"];
    $man_date = $_POST["man_date"];


    $sql = "INSERT INTO pharmdisp (name, type,amount, price, quantity, exp_date, man_date) 
            VALUES ('$name',' $type' ,'$amount','$price', '$quantity', '$exp_date', '$man_date' )";

    if ($conn->query($sql) === TRUE) {
        echo "Drug added successfully!";
        header("Location:drugdisptbl.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // echo "Please provide all the required information.";
}
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

        <a href="../login/logout.php" class="btn btn-primary btn-lg">logout</a>
      
        </div>
        </div>
        <div class="offcanvas offcanvas-start" id="demo">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title"><i class="fa-solid fa-hospital"></i>NAVIGATION</h1>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul>
                    <li><a href="../pharmreq/drugpurchase.php"
                            class="link-info link-offset-2 link-underline-opacity-100-hover"><i
                                class="fa-solid fa-file-medical"></i><b> DRUG PURCHASE</b></a></li> <br />
                    <br />
                    <li><a href="../pharmreq/drugdisptbl.php"
                            class="link-info link-offset-2 link-underline-opacity-100-hover"> <i
                                class="fa-solid fa-hand-holding-medical"></i> <b> DRUG DISPENSING TABLE</b></a></li>
                    <br />
                    <br />

                    <li><a href="../users/pharmacy.php"
                            class="link-info link-offset-2 link-underline-opacity-100-hover"><i
                                class="fa-solid fa-circle-h"></i> <b> PHARMACY DASHBOARD</b></a></li> <br />
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

    <div class="container">
        <div class="content">
            <h2 class="logo"><i class="fa fa-heartbeat" aria-hidden="true"></i>MediHub</h2>

            <div class="text-sci">
                <h2>Welcome Back <br>Dispense Drugs <span></span></h2>
                <p>Fill in the form to update the drug inventory</p>

                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></i></a>

                </div>
            </div>
        </div>
        <div class="logreg-box">
            <div class="form-box login">
                <form action="#" method="POST">
                    <h2>Dispense Drugs</h2>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-pills"></i></span>
                        <input type="text" id="name" name="name" required>
                        <label for="name">Drug Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-pills"></i></span>
                        <input type="text" id="type" name="type" required>
                        <label for="type">Drug Type</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-truck-medical"></i></span>
                        <input type="text" id="amount" name="amount" required>
                        <label for="company">Drug Amount</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-dollar-sign"></i></span>
                        <input type="price" id="price" name="price" required>
                        <label for="price">Drug Price</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-grip-vertical"></i></span>
                        <input type="number" id="quantity" name="quantity" required>
                        <label for="quantity">Drug Quantity</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                        <input type="date" id="exp_date" name="exp_date" required>
                        <label for="date">Drug Expiration Date</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                        <input type="date" id="man_date" name="man_date" required>
                        <label for="date">Drug Manufacturing Date</label>
                    </div>




                    <br>
                    <br>
                    <div class="radio">
                        <div> <span class="icon"></i></span>



                        </div>


                    </div>


                    <a href="drugdisptbl.php"><button type="submit" class="btn btn-primary btn-lg">Submit</button></a>

                </form>
            </div>
        </div>

    </div>

    </div>

</body>

</html>