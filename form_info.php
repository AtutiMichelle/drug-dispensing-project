<?php

require_once ("db_connection.php");

$SSN=$_POST["SSN"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$DateOfBirth=$_POST["DateOfBirth"];
$password=$_POST["password"];
$usertype=$_POST["usertype"];

$sql="INSERT INTO registration (SSN,fname, lname,email,DateOfBirth,password,usertype) 
VALUES ('$SSN','$fname', '$lname','$email','$DateOfBirth','$password','$usertype')";

if ($conn->query($sql) === TRUE) {
    // echo "Data inserted successfully!";
    // header("Location: login/signin.php");
        exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>