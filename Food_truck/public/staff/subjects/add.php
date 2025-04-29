<?php 
require 'food_connect.php';
// retrieve all variables
$truck_id = @$_POST["truck_id"];
$truck_name = @$_POST["truck_name"];
$owner_id = @$_POST["owner_id"];
$location = @$_POST["location"];

// insert information to database

$sql="insert into $tblname

values('$truck_name','$truck_id','$owner_id','$location')";
$result=mysqli_query($conn, $sql);


mysqli_close($conn);
?>

<html>
<head>
<title>Add Processed</title>
<BODY>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p>
  <h1>Your information is added to database. </h1>
  <body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<a href="index.php">Back to Main Menu</a>
</body>
</html>
