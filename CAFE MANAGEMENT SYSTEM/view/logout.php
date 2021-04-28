<?php
	session_start();
	session_unset();
	session_destroy();
	setcookie("id","", time() - (86400 * 30), "/");
	header("Location:../view/login.php");
		
?>