<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "table";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `customer`";
$result = mysqli_query($conn, $sql);

?>