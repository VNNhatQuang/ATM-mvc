<?php
	session_start();
	$_SESSION['ktdn'] = true;
	$_SESSION['ktdk'] = true;

	if(isset($_POST['txtun']) && isset($_POST['txtun'])) {
		$un = $_POST['txtun'];
		$pass = $_POST['txtpass'];
		require_once('../Models/dangnhapModel.php');
		$dn = new DangNhapModel;
		$tk = $dn->ktdn($un, $pass);

		if($tk != null) {
			$_SESSION['tk'] = $tk;
			header('location: http://localhost/_PHP/ATM_mvc/Controllers/atmController.php');
		}
		else {
			$_SESSION['ktdn'] = false;
			header('location: http://localhost/_PHP/ATM_mvc/');
		}
	}
	else {
		header('location: http://localhost/_PHP/ATM_mvc/');
	}

?>
