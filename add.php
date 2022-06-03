<!DOCTYPE html>
<html>
<head>
	<title>ADD USER</title>
	
</head>
<body id="body">
	<a href="user_login.php" class="link">Login</a>
<form method="POST">
	<table id="table">
		<tr><td><H3><U>NEW USER</U></H3></td></tr>
		<tr>
			<td>Username</td>
		</tr>
		<tr>
			<td><input type="text" name="name" required=""></td>
		</tr>
		<tr>
			<td>Password</td>
			</tr>
		<tr>
			<td><input type="password" name="password" required=""></td>
		</tr>
		<tr>
			<td>Category</td>
			</tr>
		<tr>
			<td>
			<select name="option">
			<option>Customer</option>
			<option>Admin</option>	
			</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="add" value="Create">
	<input type="submit" name="cancel" value="cancel">
			</td>
		</tr>
	</table>
</form>
<?php 
if (isset($_POST['add'])) { 
$name=$_POST['name'];
$password=$_POST['password'];
$option=$_POST['option'];
$con=mysqli_connect("localhost","root","","system");
$sql="insert into Users (id,Username,Password,Category) 
values('','$name','$password','$_POST[option]')"; 
if (mysqli_query($con,$sql)) 
{ 
	?>
	<script>alert("User created succefully");</script>
	<script>window.locatin.href= "user_login.php"</script>	 
	 <?php 
}
else
{
die('Not added '. mysqli_connect_error());	
}
mysqli_close($con) ;
}
//}
?>
</body>
</html>