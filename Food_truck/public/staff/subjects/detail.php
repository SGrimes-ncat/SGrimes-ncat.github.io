<?php 
require 'food_connect.php';

// retrieve all variables
$truck_name = @$_GET["truck_name"];


// show all contact information
$sql="select * from $tblname where truck_name='$truck_name'";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result); 
mysqli_close($conn);
?>

<html>
<head>
<title>Detail</title>
</head>

<BODY>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<center>
<blockquote> 
    <center><table width="60%" border="0" cellpadding="5" cellspacing="15">
	<tr>
		<td colspan="2"><p style="font-size:72px;"><?php echo "$truck_name"; ?></p></td>
	  </tr>

    <tr>
      <td width="130">Truck Name :</td>
      <td><?php echo $row['truck_name']; ?></td>
    </tr>

    <tr>
      <td width="130">Truck ID :</td>
      <td><?php echo $row['truck_id']; ?></td>
    </tr>

    <tr>
      <td width="130">Owner ID :</td>
      <td><?php echo $row['owner_id']; ?></td>
    </tr>

    <tr>
      <td width="130"><p>Location :<br />
      </p>        </td>
      <td><?php echo $row['location']; ?></td>
    </tr>
  
  </table>
</center>
   </p>
</center>
</blockquote>

<a href="index.php">Back to Main Menu</a>


</body>
</html>
