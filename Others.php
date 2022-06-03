<!-- <?php //session_start();
//if(!isset($_SERVER['HTTP_REFERER']))
{
	//header("Location:user_login.php");
}
?> -->
<html>
<body>
<div>
<span id="user_info">
<small>welcome,</small>
<?php echo $_SESSION['user'];?>
<a href="logout.php">logout</a>
</span></div>
<fieldset style="width:30%"><legend>insert</legend>
<form method="post" action="insert.php">
<table border=0>
<tr><td>Name:</td> <td><input type="text" name="name"></td></tr>
<tr><td>Phone:</td> <td ><input type="number" name="phone"></td></tr>
<tr><td>City:</td> <td><input type="text" name="city"></td></tr>
<tr><td>Date:</td> <td><input type="date" name="date"></td></tr>
<tr><td>username:</td> <td><input type="text" name="username"></td></tr>
<tr><td>password:</td> <td><input type="password" name="password"></td></tr>
<tr><td><input type="submit" name="submit" value="add"></td></tr>
</table>
</form>
</fieldset>
</body>
</html>