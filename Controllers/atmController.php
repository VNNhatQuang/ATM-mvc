<?php
	session_start();
	$tk = $_SESSION['tk'];
	if($tk!=null) {
		header('location: http://localhost/_PHP/ATM_mvc/Views/atm.php');
	}
	else {
		session_unset();
		header('location: http://localhost/_PHP/ATM_mvc/Controllers/dangnhapController.php');
	}

?>