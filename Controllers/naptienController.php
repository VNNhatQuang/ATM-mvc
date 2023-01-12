<?php

	session_start();
	$tk = $_SESSION['tk'];

	if($tk==null) {
		header('location: /_PHP/ATM_mvc/Controllers/dangnhapController.php');
	}
	else {
		$st = $_POST['st'];
		if($st==null) {
			header('location: /_PHP/ATM_mvc/Views/naptien.php');
		}
		else {
			if($st=="") {
				header('location: /_PHP/ATM_mvc/Views/giaodichthatbai.php');
			}
			else {
				require_once('../Models/atmModel.php');
				$atm = new atmModel;
				$atm->NapTien($tk['SoTaiKhoan'], $st);
				header('location: /_PHP/ATM_mvc/Views/giaodichthanhcong.php');
			}
		}
	}

?>
