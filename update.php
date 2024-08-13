<?php
include_once 'updatedata.php';
$result = mysqli_query($conn,"SELECT * FROM ticketPrice");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="styleAdmin.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>Adult Price</td>
		<td>Child Price</td>
		<td>Senior Price</td>
		<td>Date Update</td>
		
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["adultPrice"]; ?></td>
		<td><?php echo $row["childPrice"]; ?></td>
		<td><?php echo $row["seniorPrice"]; ?></td>
		<td><?php echo $row["dateUpdate"]; ?></td>
       
		<td><a href="update-process.php?id=<?php echo $row["adultPrice"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>
