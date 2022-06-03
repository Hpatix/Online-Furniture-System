<?php 
$con = mysqli_connect("localhost","root","","my_db1"); 
if (!$con) 
{ 
die('Could not connect:'. mysqli_connect_error()); 
}  
$result = mysqli_query($con,"SELECT * FROM students");
?> 
<form method="post" action="#">
<select name='combo'>
	<?php
while($row = mysqli_fetch_array($result)) 
{ 
		?>
<option value="<?php echo $row['FirstName'];?>"><?php echo $row['FirstName'];?></option> 

<?php
} 
?>
</select>
</form>
<?php
mysqli_close($con); 
?> 
