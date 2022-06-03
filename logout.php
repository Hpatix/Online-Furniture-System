<?php
session_start();
unset($_SESSION['user']);
header("Location:user_login.php");
?>