<?php

	if(isset($_GET['st']) && $_GET['st']!="") {
		$st =  $_GET['st'];
		session_start();

		if(isset($_SESSION['tk'])) {
			$tk = $_SESSION['tk'];
			if($st%50000 == 0) {
				require_once('../Models/atmModel.php');
				$atm = new atmModel;
				if($atm->RutTien($tk['SoTaiKhoan'], $st)) {
					// Cập nhật lại biến session
					require_once('../Models/dangnhapModel.php');
					$dn = new DangNhapModel;
					$_SESSION['tk'] = $dn->ktdn($tk['SoTaiKhoan'], $tk['MatKhau']);
					header('location: /_PHP/ATM_mvc/Views/giaodichthanhcong.php');
				}
				else
				header('location: /_PHP/ATM_mvc/Views/ruttienthatbai.php');
			}
			else {
				header('location: /_PHP/ATM_mvc/Views/ruttienthatbai.php');
			}
		}
		else {
			header('location: /_PHP/ATM_mvc/Controllers/dangnhapController.php');
		}
	}
	else {
		header('location: /_PHP/ATM_mvc/Views/ruttienthatbai.php');
	}

?>