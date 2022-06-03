<?php
if (isset($_POST['submit'])) {
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$Category = $_POST['cat'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$tel_no = $_POST['tel_no'];
		
		$con = mysqli_connect("localhost", "root", "", "system") or die ("connection to db error");
		$ins_query = "INSERT INTO Users (`id`, `Username`, `Password`, `Category`,`email`,`address`,`tel_no`) VALUES ('','$Username', '$Password', '$Category','$email','$address','$tel_no')";
		$ins_q = mysqli_query($con, $ins_query) or die ("Query error");

		if ($ins_q){
				     ?>
					<script>
							window.alert("New User Account has Registered Successfully");
							window.location.href='user_login.php';
					</script>
						<?php
					}
	}
?>