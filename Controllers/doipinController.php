<?php

	session_start();

	$tk = $_SESSION['tk'];

	if($tk==null) {
		header('location: http://localhost/_PHP/ATM_mvc/Controllers/dangnhapController.php');
	}
	else {
		$pinmoi = $_POST['pinmoi'];
		$checkpinmoi = $_POST['checkpinmoi'];
		if($pinmoi=="" || $checkpinmoi=="" || $pinmoi!=$checkpinmoi) {
			header('location: http://localhost/_PHP/ATM_mvc/Views/doipin.php');
		}
		else {
			require_once('../Models/atmModel.php');
			$atm = new atmModel;
			$atm->DoiMaPIN($tk['SoTaiKhoan'], $pinmoi);
			require_once('../Models/dangnhapModel.php');
			$dn = new dangnhapModel;
			$_SESSION['tk'] = $dn->ktdn($tk['SoTaiKhoan'], $pinmoi);
			header('location: http://localhost/_PHP/ATM_mvc/Views/doipinthanhcong.php');
			
		}
	}

?>