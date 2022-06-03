<?php 
$con=mysqli_connect("localhost","root","","system"); 
if (!$con) 
{ 
die('Could not connect:'. mysqli_connect_error()); 
}  
$id=$_GET['num'];
$result = mysqli_query($con,"DELETE FROM furniture WHERE ID='$id'"); 
if($result)
{?>
	<script>alert('Do you want to delete this record?');</script>
	<script>window.location.href='select.php'</script>
<?php
}
else
{
	die("Error:".mysqli_connect_error());
}
mysqli_close($con); 
?>
