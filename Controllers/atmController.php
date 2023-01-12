<?php
	session_start();
	if(isset($_SESSION['tk'])) {
		$tk = $_SESSION['tk'];
		header('location: http://localhost/_PHP/ATM_mvc/Views/atm.php');
	}
	else {
		session_unset();
		header('location: http://localhost/_PHP/ATM_mvc/Controllers/dangnhapController.php');
	}

?>