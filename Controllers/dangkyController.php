<?php

	$hoten = $_POST['txthotendk'];
	$un = $_POST['txtundk'];
	$pass = $_POST['txtpassdk'];
	$checkpass = $_POST['txtcheckpassdk'];

	session_start();
	$_SESSION['ktdk'] = true;
	$_SESSION['ktdn'] = true;

	if(($hoten==null || $un==null || $pass==null || $checkpass==null) || $pass!=$checkpass || ($hoten=="" || $un=="" || $pass=="" || $checkpass=="")) {
		$_SESSION['ktdk'] = false;
		header('location: http://localhost/_PHP/ATM_mvc/');
	}
	else {
		require_once('../Models/dangkyModel.php');
		$dk = new dangkyModel;
		$tk = $dk->dangky($un, $hoten, 50000, $pass);
		if($tk!=null) {
			$_SESSION['tk'] = $tk;
			unset($_SESSION['ktdk']);
			header('location: http://localhost/_PHP/ATM_mvc/Views/atm.php');
		}
		else {
			$_SESSION['ktdk'] = false;
			header('location: http://localhost/_PHP/ATM_mvc/');

		}
	}

?>