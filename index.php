<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VietinBank - Đăng nhập hoặc đăng ký</title>
	<link rel="icon" href="./Views/assets/image/icon/icon.png">
	<link rel="stylesheet" href="./Views/assets/font/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="./Views/assets/css/dangnhap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	<div id="main">
		<div id="logo">
			<img alt="" src="./Views/assets/image/icon/logo.png" width="400">
			<p>Nâng giá trị cuộc sống</p>
		</div>
		<div id="form">
			<form action="Controllers/dangnhapController.php" method="post">
				<p>Tên đăng nhập</p>
				<input type="text" name="txtun" class="form-control form-control-lg" placeholder="Nhập Tên đăng nhập"/>
				<br>
				<p>Mật khẩu</p>
				<input type="password" name="txtpass" class="form-control form-control-lg" placeholder="Nhập Mật khẩu"/>
				
				<?php
					session_start();
					$ktdn = (bool) $_SESSION['ktdn'];
					if (!$ktdn) {
				?>
					<br>
					<span>Tên đăng nhập hoặc mật khẩu sai!</span>
					<br>
				<?php } ?>

				<br>
				<input type="submit" class="btn btn-primary" value="Đăng nhập">
			</form>
			<hr>
			<button class="btn btn-success">Tạo tài khoản</button>
			
			<?php
				if(((bool) $_SESSION['ktdk']==false)) {
			?>
				<div class="register-status">
					<span>Đăng ký thất bại!</span>
				</div>
			<?php } ?>

		</div>
	</div>

	<div id="register">
		<div id="space-close"></div>
		<div id="register-model">
			<form action="Controllers/dangkyController.php" method="post">
				<div id="close">
					<i class="ti-close"></i>
				</div>
				<p>Họ tên</p>
				<div class="container">
					<input type="text" name="txthotendk" class="form-control form-control-lg" placeholder="* Nhập Họ tên"/>
				</div>
				<p>Tên đăng nhập</p>
				<div class="container">
					<input type="text" name="txtundk" class="form-control form-control-lg" placeholder="* Nhập Tên đăng nhập"/>
				</div>
				<p>Mật khẩu</p>
				<div class="container">
					<input type="password" name="txtpassdk" class="form-control form-control-lg" placeholder="* Nhập Mật khẩu"/>
				</div>
				<p>Xác nhận Mật khẩu</p>
				<div class="container">
					<input type="password" name="txtcheckpassdk" class="form-control form-control-lg" placeholder="* Nhập lại Mật khẩu"/>
				</div>
				<br>
				<hr>
				<input type="submit" class="btn btn-success" value="Đăng ký">	
			</form>
		</div>
	</div>

	<script src="./Views/assets/js/dangnhap.js"></script>


</body>

</html>