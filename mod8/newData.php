<?php 

session_start();

if ($_SESSION["data"] !="login") {
	header("Location:index.php");
	echo "Login Terlebih Dahulu";
}

echo "Welcome". $_SESSION['username'];
 ?>