<?php 
// connect to my sql
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "cst225_final";	// Database name

$tblname="food_trucks"; // Table name

// Connect to server and select databse.
	
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
echo "";

?>
