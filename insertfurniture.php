<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body id="body">
	<?php session_start();
if(!isset($_SESSION['user']))
{
	header("Location:user_login.php");
}
?>
<form method="POST" action="" id="bady">
<table>
   <tr>
   	<td>Furniture N<sup><u>O</u></sup>:</td>
   	<td><input type="number" name="num"></td>
   </tr><br>
   <tr>
   	<td>Furniture Name:</td>
   	<td><input type="text" name="name"></td>
   </tr><br>
   <tr>
   	<td>Cost:</td>
   	<td><input type="text" name="cost"></td>
   </tr><br>
   <tr>
   	<td>Quantity:</td>
   	<td><input type="number" name="quantity"></td>
   </tr><br><br>
</table><br>&nbsp;
<input type="submit" name="submit" value="ADD FURNITURE" >
</form>
<?php  
if (isset($_POST['submit'])) {
$num=$_POST['num'];
$name=$_POST['name'];
$cost=$_POST['cost'];
$quantity=$_POST['quantity'];
$con=mysqli_connect("localhost","root","","system");
$sql="insert into furniture (ID,Furniture,Cost,Quantity) 
values('$num','$name','$cost','$quantity')"; 
if (mysqli_query($con,$sql)) 
{ 
	echo '<script> alert(1 record added)</script>';  
} 
else
{
echo '<script> alert("Failed to add")</script>'; 	
}
}
?>
</body>
</html>