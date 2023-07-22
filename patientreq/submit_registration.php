<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'drugdispenser') or die('Unable to connect');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $gender = $_POST["gender"];
    $emailAddress = $_POST["emailAddress"];
    $address = $_POST["address"];
    $ID = $_POST["ID"];
    $SSN = $_POST["SSN"];
    $med_cond = $_POST["medicalcond"];
    $insurance = $_POST["insuranceProvider"];
    $policy = $_POST["policyNumber"];
    $rel_name = $_POST["name"];
    $rel_relation = $_POST["relationship"];
    $rel_phone = $_POST["rel_phone"];

    // Insert data into the database
    $sql = "INSERT INTO patientreg (fname, lname, dateOfBirth, gender, email, address, identification, SSN, med_cond, insurance, policy, rel_name, rel_relation, rel_phone)
            VALUES ('$firstName', '$lastName', '$dateOfBirth', '$gender', '$emailAddress', '$address', '$ID', '$SSN', '$med_cond', '$insurance', '$policy', '$rel_name', '$rel_relation', '$rel_phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully!";
        // Redirect to a success page or any other page you want.
        header("Location:../users/patient.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
