<?php
$servername = "localhost";
// $database = "fbp_landmark";
// $username = "root";
// $password = "";
$database = "fbp_landmark";
$username = "fbp_landmark";
$password = "5Ifm^5b6";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>