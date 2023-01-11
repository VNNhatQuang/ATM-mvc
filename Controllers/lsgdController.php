<?php

	session_start();
	$tk = $_SESSION['tk'];
	if($tk == null) {
		header('location: /_PHP/ATM_mvc/Controllers/dangnhapController.php');
	}
	else {
		require_once('../Models/atmModel.php');
		$atm = new atmModel;
		$_SESSION['lsgd'] = $atm->XemLSGD($tk['SoTaiKhoan']);
		header('location: /_PHP/ATM_mvc/Views/lichsu.php');
	}

?>
