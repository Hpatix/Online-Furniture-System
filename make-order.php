<!DOCTYPE html>
<html>
<head>
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
<form method="POST" action="order.php" id="bady">
<table>
   <tr>
   	<td>Order N<sup><u>O</u></sup>:</td>
   	<td><input type="number" name="order_id"></td>
   </tr><br>
   <tr>
   	<td>User ID:</td>
   	<td><input type="number" name="user_id"></td>
   </tr><br>
   <tr>
   	<td>Username:</td>
   	<td><input type="text" name="username"></td>
   </tr><br>
   <tr>
   	<td>Furniture N<sup><u>O</u></sup>:</td>
   	<td><input type="number" name="furniture-num"></td>
   </tr><br>
   <tr>
   	<td>Furniture name:</td>
   	<td><input type="text" name="furniture"></td>
   </tr><br>
   <tr>
   	<td>Date:</td>
   	<td><input type="date" name="date"></td>
   </tr><br>
   <tr>
   	<td>Quantity:</td>
   	<td><input type="number" name="quantity"></td>
   </tr><br>
   <tr>
   	<td>Location:</td>
   	<td><input type="text" name="location"></td>
   </tr><br><br>
</table>
<input type="submit" name="submit" value="ORDER">
</form>

</body>
</html>