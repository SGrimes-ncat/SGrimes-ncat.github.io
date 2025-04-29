<?php 
// connect to my sql
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "Holmes_conf";	// Database name

$tblname="contacts"; // Table name

// Connect to server and select databse.
	
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
echo "";

?>
