<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$x=mysqli_connect("localhost","root","","my_db1");
if(!$x)
{
	die("error:".mysqli_connect_error());
}
else
{
$newpassword = $_POST['newone'];
$confirmPassword = $_POST['ree'];
$sql = "select password from users where password='$_POST[old]'";
$query=mysqli_query($x,$sql);
if(mysqli_num_rows($query)==0)
{
	echo "user doesn't exist!";
}
else if($newpassword==$confirmPassword)
{
$password2 = $_POST['old'];
$newpassword2 = sha1($_POST['newone']);
$confirmPassword2 = $_POST['ree'];
$sql2 = "update users set password='$newpassword2' where password='$password2'";
$query2 =mysqli_query($x,$sql2);
if($query2)	
{
	echo "congratulations";
}}
else
{
echo "password does not match!";}	
}
mysqli_close($x);  
?>
</body>
</html>