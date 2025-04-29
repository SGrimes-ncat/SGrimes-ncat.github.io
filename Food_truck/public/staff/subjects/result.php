<?php 
require 'food_connect.php';

// retrieve all variables
$keyword = @$_POST["keyword"];
$searchin = @$_POST["searchin"];

// execute query
$sql="select * from $tblname";
$result=mysqli_query($conn, $sql);
mysqli_close($conn);

?>

<html>
<head>
<title>Results</title>
</head>

<BODY>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p>
  <center><p style="font-size:72px; font-family:Brush Script MT;">Result</p></center>
   <?php
       $i =0;
    while($row = mysqli_fetch_assoc($result)) {
      $truck_name = $row['truck_name'];
        $owner_id = $row['owner_id'];
      
  
        if ($searchin == "truck_name") {
        // seach in first name
         if (preg_match("/$keyword/i",$truck_name)){
            echo "<ul><li><h4><a href=\"detail.php?owner_id=$owner_id&truck_name=$truck_name\">$owner_id, $truck_name</a>	      <h4></li></ul>";
            $i++;
        }
      } else {
        // search in last name
        if (preg_match("/$keyword/i",$owner_id)){
            echo "<ul><li><h4><a href=\"detail.php?owner_id=$owner_id&truck_name=$truck_name\">$owner_id, $truck_name</a><h4></li></ul>";
            $i++;
        }        
      }
    }
    
    if ($i == 0)
      echo "<ul><h4>No match result.<h4></ul>";

     
     
  ?>
  
</blockquote>

<a href="index.php">Back to Main Menu</a>


</body>
</html>
