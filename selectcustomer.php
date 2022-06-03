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
	<a href="logout.php" class="link">Logout</a>
<header id="bady">
	<h3>Our Customers</h3>

<?php 
$con = mysqli_connect("localhost","root","","system"); 
if (!$con) 
{ 
die('Could not connect:'. mysqli_connect_error()); 
}  
$result = mysqli_query($con,"SELECT * FROM Users WHERE Category='Customer'");?> 
<form method="post" action="#">
<table border="1" cellspacing="0">
<tr> 
<th>ID</th>	
<th>Username</th> 
<th>Password</th>
<th>Category</th>  
<?php

while($row = mysqli_fetch_array($result)) 

{ 
		?>
<tr> 
<td><?php echo $row['id'];?></td> 
<td><?php echo $row['Username'];?></td>
<td><?php echo $row['Password'];?></td>
<td><?php echo $row['Category'];?></td>
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