<?php 
require 'food_connect.php';
// show all contact information
$sql="select * from $tblname order by truck_name";
$result=mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<html>
<head>
<title>List</title>
</head>

<BODY>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p>
  <center>
   <p style="font-size:72px; font-family:Brush Script MT;">All Contact Information</p></center>
   <?php
       if (mysqli_num_rows($result)==0){
      echo "<h4>No data<h4>"; 
    } else {
         while($row = mysqli_fetch_assoc($result)) {
          $truck_name = $row['truck_name'];
        echo "<ul><li><h4><a href=\"detail.php?truck_name=$truck_name\">$truck_name</a><h4></li></ul>";
      }
    }
     
  ?>
  
</blockquote>

<a href="index.php">Back to Main Menu</a>


</body>
</html>
