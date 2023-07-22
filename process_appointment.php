<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'drugdispenser') or die('Unable to connect');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $speciality = $_POST["speciality"];
    $doctor = $_POST["doctor"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare and execute the SQL query to insert data into the table
    $query = "INSERT INTO patientapp(speciality, doctor, date, time, name, number, email, message)
              VALUES ('$speciality', '$doctor', '$date', '$time', '$name', '$number', '$email', '$message')";

    if (mysqli_query($conn, $query)) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
