<!DOCTYPE html>
<html>
<head>
	<style>
		#body{
			background-image: url("./images/img_body.jpg");
		}
	</style>
	<title></title>
	
</head>
<body id="body">
	<center>
<form method="POST" action="login5.php" style = "background-color: lightblue; width:300px;margin-top:100px; border-radius: 15px">
	<table id="table">
		<tr><td><b><u>USER LOGIN FORM</u></b></td></tr>
		<tr><td><b>Username</b></td></tr><tr><td><input type="text" name="username"></td></tr>
		<tr><td><b>Password</b></td></tr><tr><td><input type="password" name="pwd"></td></tr>
		<tr><td>Category</td></tr><tr><td><select name="category">
			<option>Admin</option>           
			<option>Customer</option>
		</select></td></tr><tr><td><input type="submit" name="submit" value="Login"> <input type="reset" name="" value="Cancel"></td></tr>
		<tr>
			<td>
				<button>
					<a href="new_account.php" style="text-decoration: none;">Add New User</a>
				</button>
			</td>
		</tr>
	</table></form></center></body></html>
