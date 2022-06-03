<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>	
	<form action="#" method="post"> 
	<table border="0">
<tr><td>Firstname:</td><td> <input type="text" name="firstname" /> </td></tr>
<tr><td>Lastname:</td> <td><input type="text" name="lastname" /> </td></tr> 
<tr><td><input type="submit" name="submit"/> </td></tr> 
</table>
</form> 
<?php
if(isset($_POST['submit']))
{
$con = mysqli_connect("localhost","root","","my_db1"); 
if (!$con) 
{ 
die('Could not connect: '. mysqli_connect_error()); 
}
$result=mysqli_query($con,"select FirstName from students where FirstName='$_POST[firstname]'");
if(mysqli_num_rows($result)>0)
{?>
<script>alert("Firstname is alredy in use");</script>
<script>window.location.href='insert.php'</script>
<?php
}
 else
{
$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
$lastname=mysqli_real_escape_string($con,$_POST['lastname']);
$sql="insert into students (id,FirstName,LastName) 
values('','$firstname','$lastname')"; 
if (mysqli_query($con,$sql)) 
{ 
	echo "1 record added";  
} 
else
{
die('Error: '. mysqli_connect_error());	
}
mysqli_close($con) ;
}
}
?>
</body>
</html>

