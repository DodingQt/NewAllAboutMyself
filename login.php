<?php

$servername = "localhost";
$username = "root";
$password =  "";
$dbname = "registration";

$conn = new mysqli($servername, $password, $dbname);

if ($conn ->coneect_error) {
    die("Connedtion Failed: " . $conn ->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' And password='$password';
$result = $conn ->query($sql);

if ($result->num_rows > 0) {

   header("location: index.html");
   } else {

   echo "Invalid email or password";
}

$conn->close();

?>