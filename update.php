<?php
require_once ("../db_connection.php");
session_start();
$id = $_GET['updateid'];
$sql = "SELECT * FROM inventory WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$type = $row['type'];
$price = $row['price'];
$quantity = $row['quantity'];
$exp_date = $row['exp_date'];
$man_date = $row['man_date'];


if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $type = $_POST["type"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $exp_date = $_POST["exp_date"];
    $man_date = $_POST["man_date"];
   

    $sql = "UPDATE inventory SET name='$name', type='$type', price='$price', quantity='$quantity',
            exp_date='$exp_date', man_date='$man_date' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
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


    
        <form method="POST">
            <div class="mb-3">
                <label>Drug Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name"
                    value="<?php echo $name; ?>">

                <label>Drug Type</label>
                <input type="text" class="form-control" placeholder="Enter type" name="type"
                    value="<?php echo $type; ?>">

                <label>Drug Price</label>
                <input type="number" class="form-control" placeholder="Enter price" name="price"
                    value="<?php echo $price; ?>">

                <label>Drug Quantity</label>
                <input type="number" class="form-control" placeholder="Enter quantity" name="quantity"
                    value="<?php echo $quantity; ?>">

                <label>Drug Expiration Date</label>
                <input type="date" class="form-control" placeholder="Enter Expiration Date" name="exp_date"
                    value="<?php echo $exp_date; ?>">

                <label>Drug Manufacturing Date</label>
                <input type="date" class="form-control" placeholder="Enter Manufacturing Date" name="man_date"
                    value="<?php echo $man_date; ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-lg" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
