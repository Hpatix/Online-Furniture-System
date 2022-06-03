<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<title>	Customer's page </title>
</head>
<body id="body">
		<center>
	 <?php  session_start();
if(!isset($_SESSION['user']))
{
	header("Location:user_login.php");
}
?>

<a href="logout.php" class="link">Logout</a><br><br>
<a href="add.php" id="select" class="select">User Registration</a></a>
<a href="make-order.php" class="select">Make Order</a>
<a href="selectforcust.php" class="select">View Furniture</a>
<a href="" class="select">Payment</a>
<a href="search.php" class="select">Search Furniture</a>
<a href="" class="select">Add to Cart</a>
 <br><br><h3 id="h3">Customer's Page</h3>

 </center>

 	
</body>
</html>
<?php 
 include("footer.php");
 ?>
