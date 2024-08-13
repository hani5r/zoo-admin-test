<html>
<head>
<title>Zoo Negara Visitors</title>
<link rel="stylesheet" type="text/css" href="styleAdmin.css" >
</head>
<body>
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
//get input value
$vEmail=$_POST['vEmail'];

// sql to delete a record
$sql = "DELETE FROM booking WHERE email='$vEmail'";
if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully";
}
else {
echo "Error deleting record: " . $conn->error;
}
//close connection
$conn->close();
echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body>
</html>