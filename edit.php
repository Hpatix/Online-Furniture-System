<?php 
$con = mysqli_connect("localhost","root","","system"); 
if (!$con) 
{ 
die('Could not connect:'. mysqli_connect_error()); 
} 
$Cost=$_POST['Cost'];
$result = mysqli_query($con,"SELECT * FROM furniture where Cost='$Cost'");?> 
<form  action="" method="POST">
<table border="0">
<?php

while($row = mysqli_fetch_array($result)) 
{ 
		?>
<tr> 
<td><?php echo date("Y-m-d h:i:s");?></td></tr>
<tr>
<td><input type='number' name='ID' value='<?php echo $row['ID'];?>' ></td> </tr>
<td><input type='text' name='Furniture' value='<?php echo $row['Furniture'];?>'></td></tr>
<tr>
<td><input type='text' name='Cost' value='<?php echo $row['Cost'];?>'></td>
</tr>
<tr>
<td><input type='text' name='Quantity' value='<?php echo $row['Quantity'];?>'></td>
</tr>
<td align="center"><input type='submit' name='submit' value='update'>
<button onclick="window.print()">print</button></td>
</tr> <?php
} 
?>
</table>

</form>
<?php
if(isset($_POST['submit']))
{
	$con = mysqli_connect("localhost","root","","system"); 
if (!$con) 
{ 
die('Could not connect:'. mysqli_connect_error()); 
} 
$ID=$_POST['ID'];
$Furniture=$_POST['Furniture'];
$Cost=$_POST['Cost'];
$Quantity=$_POST['Quantity'];
	$update=mysqli_query($con,"UPDATE furniture SET Furniture='$Furniture', Cost='$Cost', Quantity='$Quantity' WHERE Cost='$Cost'");
	if ($update)
	{?>
<script>
window.location.href='select.php'
</script>
<?php
	}
	else
	{
		die("Error:".mysqli_connect_error());
	}

}
mysqli_close($con);
?> 
