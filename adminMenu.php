<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styleAdmin.css" >
<title>Admin Menu</title>
</head>

<body>
<p style="font-size:80fpx" align="center">Main Menu for Admin</p>
<!--<form action="manage_promo.php" method="post">
<p align="center"><input type="submit" value="Manage Promotion" name="cmdView"></p>
</form> -->

<form action="viewRecord.php" method="post">
<p align="center"><input type="submit" value="View Record" name="cmdSearch"></p>
</form>

<form action="searchRecord.php" method="post">
<p align="center"><input type="submit" value="Search Record" name="cmdSearch"></p>
</form>

<!--<div align="center">
   <form action="editContact.php" method="post">
<p><input type="submit" value="Update Record" name="cmdSearch"></p>
</form> 
  
</div>-->
<form action="delete.php" method="post">
  <p align="center"><input type="submit" value="Delete Record" name="cmdDelete"></p>
</form>


<form action="logOutAdmin.php" method="post">
<p align="center"><input type="submit" value="Log Out" name="cmdlogout"></p>
</form>



</body>
</html>