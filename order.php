<?php  
if (isset($_POST['submit'])) {
$a=$_POST['order_id'];
$b=$_POST['user_id'];
$c=$_POST['username'];
$d=$_POST['furniture-num'];
$e=$_POST['furniture'];
$f=$_POST['date'];
$g=$_POST['quantity'];
$h=$_POST['location'];
$con=mysqli_connect("localhost","root","","system");
		if (!$con) {
			die("Connection error".mysqli_connect_error());
		}
$sql="insert into makeorders (Order_id,S_id,Username,F_ID,Furniture_name,Date,Quantity,Location) 
values('$a','$b','$c','$d','$e','$f','$g','$h')"; 
if (mysqli_query($con,$sql)) 
{ 
	echo '<script> alert(1 record added)</script>';  
} 
else
{
echo '<script> alert("Failed to add")</script>'; 	
}}
?>
<html>
<head>
	<style>
		tr, th, table{
			margin-left: 200px;
			border: 1px solid green;
			padding: 3px;
			border-radius: 5px;

		}
	</style>
</head>
<?php session_start();
if(!isset($_SESSION['user']))
{
	header("Location:user_login.php");
}
?>
<header id="bady">
	<h3 style="font-family: arial;text-align: center;">ORDERS</h3>

<?php 
$con = mysqli_connect("localhost","root","","system"); 
if (!$con) 
{
die('Could not connect:'. mysqli_connect_error()); 
}  
$result = mysqli_query($con,"SELECT * FROM makeorders");?> 
<table border="1" cellspacing="0">
<tr> 
<th>Order_id</th>	
<th>S_id</th> 
<th>Username</th>
<th>Furniture_id</th>
<th>Furniture_name</th>
<th>Date</th>
<th>Quantity</th>
<th>Location</th>  
<?php

while($row = mysqli_fetch_array($result)) 
{ 
		?>
<tr> 
<td><?php echo $row['Order_id'];?></td> 
<td><?php echo $row['S_id'];?></td>
<td><?php echo $row['Username'];?></td>
<td><?php echo $row['F_ID'];?></td>
<td><?php echo $row['Furniture_name'];?></td>
<td><?php echo $row['Date'];?></td>
<td><?php echo $row['Quantity'];?></td>
<td><?php echo $row['Location'];?></td>
</tr> <?php
} 
?>
</table>
<?php
mysqli_close($con); 
?>