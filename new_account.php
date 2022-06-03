<html>
<head>
<title>User Login</title>
</head>
<body>
	<center>
		<form name="frmUser" method="POST" action="save_nu_acc.php" align="center" style = "background-color: lightblue; width:400px;margin-top:130px; border-radius: 15px">

			<h3 align="center">Customer Registration</h3>
			 
			 Username:<br>
			 <input type="text" name="Username" required size = "30" placeholder="Enter your Username">
			 <br>
			 Password:<br>
			<input type="password" name="Password" required size = "30" placeholder="Enter your Password">
			 <br>
		
				Category:
             <select name="cat">
             	<option value="Customer">Customer</option>
             	<option value="others">Others</option>
             	</select>
			<br>
			 email:<br>
			<input type="email" name="email" required size = "30" placeholder="enter your email">
			<br>
			 address:<br>
			<input type="varchar" name="address" required size = "30" placeholder="enter your address">
			<br>

			tel_no:<br>
			<input type="number" name="tel_no" required size = "30" placeholder="enter your tel_no">
			<br><br>
			<input type="submit" value="Register" name="submit">
		</form>

	</center>
		</body>
</html>