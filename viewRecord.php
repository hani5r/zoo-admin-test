<html>
<head>
<title>Visitor Details</title>
<link rel="stylesheet" type="text/css" href="styleAdmin.css" >
</head>
<body>
<br>
<h2 align="center">Visitor Details</h2>
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
//create and execute query
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);
//check if records were returned
if ($result->num_rows > 0) {
//create a table to display the record
echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
echo '<tr><td align="center"><b>Book ID</b></td>
<td align="center"><b>Name</b></td>
<td align="center"><b>Email</b></td>
<td align="center"><b>Date</b></td>
<td align="center"><b>Time Slot</b></td>
<td align="center"><b>Adult Pax</b></td>
<td align="center"><b>Child Pax</b></td>
<td align="center"><b>Senior Pax</b></td>
<td align="center"><b>Total</b></td></tr>';
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
}
}
else {
echo "0 results"; //if no record found in the database
}
//close connection
$conn->close();
echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body>
</html>