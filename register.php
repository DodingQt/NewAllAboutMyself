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

$sql = "INSERT INTO users WHERE email='$email' And password='$password';
$result = $conn ->query($sql);

if ($conn->query($sql) == TRUE) {

   echo "New record created successfully";

   } else {

   echo "Erroe: " . $sql . "<br>" . $comm->error;
}

$conn->close();

?>