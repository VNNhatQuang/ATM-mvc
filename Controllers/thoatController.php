<?php

	session_unset();	
	session_destroy();
	
	header('location: http://localhost/_PHP/ATM_mvc/Controllers/dangnhapController.php');

?>
