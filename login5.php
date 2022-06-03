<?php
	session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","system"); 
if (!$con) 
{ 
die('Could not connect:'. mysqli_connect_error()); 
}  
$result=mysqli_query($con,"select id,username,password, category from Users where username='$_POST[username]'and password='$_POST[pwd]'and category='$_POST[category]'");
if(mysqli_num_rows($result)==1 && $_POST['category']=='Admin')
{
	$_SESSION['user']=$_POST['username'];
	header("Location:Admin.php");

}
else if(mysqli_num_rows($result)==1 && $_POST['category']=='Customer')
{
	$_SESSION['user']=$_POST['username'];
	header("Location:customer.php");
}
else
{
	echo "wrong role";
}
mysqli_close($con);
?>