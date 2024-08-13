<html>
<head>
<title>save animal</title>
</head>
<body>
<?php
$date = date("d-m-Y");
//get input values from form
extract($_POST);
?>
<p>Date: <b><?php print($date) ?></b></p>
<h3>Animal List</h3>
<table>
<tr><td>Animal Name</td>
<td>:</td>
<td><b><?php print($animalName) ?></b></td>
</tr>
<tr><td>Animal Type</td>
<td>:</td>
<td><b><?php print($animalType) ?></b></td>
</tr>
<tr><td>Description</td>
<td>:</td>
<td><b><?php print($description) ?></b></td>
</tr>
<tr><td>Animal Image</td>
<td>:</td>
<td><b><?php print($animalImage) ?></b></td>
</tr>
</table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zootix_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
//create query
$sql = "INSERT INTO animal (animalName, animalType, description, animalImage) VALUES ('$animalName', '$animalType', '$description', '$animalImage')";
//execute query
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
}
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection
$conn->close();
?>
<br>
<form>
<input type="button" name="printButton" onClick="window.print()" value="Print">
</form>
</body>
</html>
