<?php

// Declare variables
$servername = "localhost";
$username = "dijisolu_jonas";
$password = "hi0ugD&B]A{e";
$database = "dijisolu_contact";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn){
    die ("Connection failed: ".mysqli_connect_error());
    } else {
        echo "Connected successfully";
    }

// Declare contact form variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$interested = $_POST['interested'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert into database tables
$sql = "INSERT INTO tbl_contact (id, fname, lname, interested, email, phone)
VALUES ('0', '$fname', '$lname', '$interested', '$email', '$phone')";

// Check connection
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// Redirect to the 'Thank You' Page
header('Location: /thank-you.html');

?>