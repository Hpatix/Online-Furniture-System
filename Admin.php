<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body">
 <?php session_start();
if(!isset($_SESSION['user']))
{
	header("Location:user_login.php");
}
?>
<a href="logout.php" class="link">Logout</a><br><br>
<a href="add.php" id="select" class="select">User Registration</a></a>
<a href="insertfurniture.php" class="select">Furniture Registration</a>
<a href="select.php" class="select">View Furniture</a>
<a href="order.php" class="select">View Oders</a>
<a href="selectcustomer.php" class="select">View Customer</a><br><br>
<a href="" class="select">View Payment</a>
<a href="" class="select">View cart</a>
<a href="select.php" class="select">Search For Furniture</a>
 <br><br><h3 id="h3">Admin Page</h3> 
</body>
</html>
<?php 
 include("footer.php");
 ?>