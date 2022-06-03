<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php session_start();
if(!isset($_SESSION['user']))
{
	header("Location:user_login.php");
}
?>
<form action="" method="post">
Search: <input type="text" name="furniture" placeholder="search for furniture" />  
<input type="submit" name="submit" value="search" /> 
<a href="logout.php">logout</a>
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
</body>
</html>