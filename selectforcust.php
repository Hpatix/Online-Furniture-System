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
<form action="" method="post">
	<a href="logout.php" class="link">Logout</a>
<p style="font-size: 20px;">Search:<input type="text" name="furniture" placeholder="Search for furniture" style="width: 100px; font-size: 15px; border-radius: 4px;"/>  
<input type="submit" name="submit" value="search" /></p> 
</form> 
<?php
if(isset($_POST['submit']))
{
	$a=preg_match("/(?=.*?[#?!@$%^&*-]).{3,}/",$_POST['furniture']);
$con = mysqli_connect("localhost","root","","system"); 
if (!$con) 
{ 
die('Could not connect:'. mysqli_connect_error()); 
}
$result = mysqli_query($con,"SELECT * FROM furniture where Furniture LIKE '%$a%'");
?>
<table border="1">
<tr> 
	<th>ID</th>
<th>Furniture</th> 
<th>Cost</th>
<th>Quantity</th> 
</tr> 
<?php
while($row= mysqli_fetch_array($result)) 
{ 
	?>
<tr>
<td><?php echo $row['ID'];?></td>; 
<td><?php echo $row['Furniture'];?></td>; 
<td><?php echo $row['Cost'];?></td>
<td><?php echo $row['Quantity'];?></td> 
</tr> <?php
} 
?>
</table>
<?php
echo "The total number of records are"." ".mysqli_num_rows($result);
mysqli_close($con); 
}
?>
<header id="bady">
	<h3>FURNITURE IN STOCK</h3>

<?php 
$con = mysqli_connect("localhost","root","","system"); 
if (!$con) 
{ 
die('Could not connect:'. mysqli_connect_error()); 
}  
$result = mysqli_query($con,"SELECT * FROM furniture");?> 
<form method="post" action="#">
<table border="1" cellspacing="0">
<tr> 
<th>ID</th>	
<th>Furniture</th> 
<th>Cost</th>
<th>Quantity</th> 
<?php

while($row = mysqli_fetch_array($result)) 
{ 
		?>
<tr> 
<td><?php echo $row['ID'];?></td> 
<td><?php echo $row['Furniture'];?></td>
<td><?php echo $row['Cost'];?></td>
<td><?php echo $row['Quantity'];?></td>
</tr> <?php
} 
?>
</table>
<?php
mysqli_close($con); 
?>
</header> 
</body>
</html>