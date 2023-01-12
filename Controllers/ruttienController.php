<?php

	session_start();

	if(isset($_SESSION['tk'])) {
		header('location: /_PHP/ATM_mvc/Views/ruttien.php');
	}
	else {
		header('location: /_PHP/ATM_mvc/Controllers/dangnhapController.php');
	}

?>
