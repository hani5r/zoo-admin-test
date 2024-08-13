<html>
<link rel="stylesheet" type="text/css" href="styleAdmin.css" >
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zootix_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//escape special characters in a string
$email = mysqli_real_escape_string($conn, $_POST['vEmail']);

//create and execute query
$sql = "SELECT * FROM booking WHERE email= '$email'";
$result = $conn->query($sql);
//check if records were returned
if ($result->num_rows > 0) {
//create a table to display the record
echo 'Selected record as the following: <br><br>';
echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center" width="700">';
echo '<tr><td align="center"><b>Booking ID</b></td>
<td align="center"><b>Name</b></td>
<td align="center"><b>Email</b></td>
<td align="center"><b>Date</b></td>
<td align="center"><b>Time Slot</b></td>
<td align="center"><b>Adult Pax</b></td>
<td align="center"><b>Child Pax</b></td>
<td align="center"><b>Senior Pax</b></td>
<td align="center"><b>Total</b></td>

</tr>';
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td align="center">'.$row["bookingID"].'</td>';
echo '<td align="center">'.$row["name"].'</td>';
echo '<td align="center">'.$row["email"].'</td>';
echo '<td align="center">'.$row["dateBook"].'</td>';
echo '<td align="center">'.$row["timeBook"].'</td>';
echo '<td align="center">'.$row["adultTix"].'</td>';
echo '<td align="center">'.$row["childrenTix"].'</td>';
echo '<td align="center">'.$row["seniorTix"].'</td>';
echo '<td align="center">RM'.$row["totalPrice"].'</td>';
echo '</tr>';
//echo "<td align='center'><a href='update.php?pid=$row[email]'> UPDATE </a>
//</td>";
echo '</tr>';
}
echo '</table></p>';
}
else {
echo '<font color=red size=20pt>No record found!!!!';
}
//close connection
$conn->close();
?>
<html>
<a href="adminMenu.php">
<button type="button">Main Menu</button>
</a>
</html>