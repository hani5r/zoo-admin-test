<?php
include_once 'updatedata.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE promote set adultPrice='" . $_POST['adultPrice'] . "', childPrice='" . $_POST['childPrice'] . "', seniorPrice='" . $_POST['seniorPrice'] . "', dateUpdate='" . $_POST['dateUpdate'] . "'  WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM ticketPrice WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Ticket Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="promotion.php">Promotion List</a>
</div>
Adult Price: <br>
<input type="text" name="adultPrice" class="txtField" value="<?php echo $row['adultPrice']; ?>">
<br>
Child Price: <br>
<input type="text" name="childPrice" class="txtField" value="<?php echo $row['childPrice']; ?>">
<br>
Senior Price :<br>
<input type="text" name="seniorPrice" class="txtField" value="<?php echo $row['seniorPrice']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>