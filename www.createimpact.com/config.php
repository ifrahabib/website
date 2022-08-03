<?php
$server = "localhost";
$userName = "root";
$password = "";
// Create database connection

$con = new mysqli($server, $userName, $password);
mysqli_select_db($con,"contact_form_info");
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
?>