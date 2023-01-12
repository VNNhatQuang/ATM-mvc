<?php

	session_start();

	if(isset($_SESSION['tk'])) {
		$tk = $_SESSION['tk'];
		
		// XÁC NHẬN TÀI KHOẢN
		if(isset($_POST['xacnhantk'])) {
			$tentk = $_POST['stknhan'];
			// Kiểm tra tên tk nhận có rỗng không
			if($tentk=="") {
				header('location: /_PHP/ATM_mvc/Controllers/chuyenkhoanController.php');
			}
			else {
				require_once('../Models/tknhanModel.php');
				$tknhan = new tknhanModel;
				$tkn = $tknhan->getTaiKhoan($tentk);
				if($tkn==null) {
					header('location: /_PHP/ATM_mvc/Controllers/chuyenkhoanController.php');
					$_SESSION['checktk'] = true;
				}
				else if($tk['SoTaiKhoan'] == $tkn['SoTaiKhoan']) {
					$_SESSION['checktk'] = true;
					header('location: /_PHP/ATM_mvc/Controllers/chuyenkhoanController.php');
				}
				else {
					$_SESSION['tknhan'] = $tkn;
					unset($_SESSION['checktk']);
					header('location: /_PHP/ATM_mvc/Views/chuyenkhoan.php');
				}
			}
		}
		
		// CHUYỂN KHOẢN
		else if(isset($_POST['chuyenkhoan'])) {
			// Kiểm tra tính hợp lệ của tiền được nhập và tk nhận
			if($_POST['sotien']=="" || $_POST['stknhan']=="") {
				header('location: /_PHP/ATM_mvc/Controllers/chuyenkhoanController.php');
			}
			else {
				require_once('../Models/atmModel.php');
				$atm = new atmModel;
				$tknhan = $_POST['stknhan'];
				$sotien = $_POST['sotien'];
				$result = $atm->ChuyenKhoan($tk['SoTaiKhoan'], $sotien, $tknhan);
				if($result)
					header('location: /_PHP/ATM_mvc/Views/giaodichthanhcong.php');
				else
				header('location: /_PHP/ATM_mvc/Views/giaodichthatbai.php');

			}
		}
		
		// CHẠY LẦN ĐẦU
		else {
			unset($_SESSION['tknhan']);
			header('location: /_PHP/ATM_mvc/Views/chuyenkhoan.php');
		}
	}

	else {
		header('location: /_PHP/ATM_mvc/Controllers/dangnhapController.php');
	}

?>