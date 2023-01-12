<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lịch sử giao dịch</title>
	<link rel="icon" href="./assets/image/icon/icon.png">
	<link rel="stylesheet" href="./assets/css/lichsu.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	<div id="main">
		<div id="header">
			<p>Ngân hàng Công Thương Việt Nam</p>
			<div class="logo">
				<img src="./assets/image/icon/logo.png" width="250">
			</div>
			<div class="title">
				<p>Lịch sử giao dịch</p>
			</div>
			<div class="desc">
				<div>
					<table class="table table-hover">
						<tr>
							<th>Mã giao dịch</th>
							<th>Số tài khoản</th>
							<th>Số tiền giao dịch</th>
							<th>Mô tả</th>
							<th>Ngày giao dịch</th>
						</tr>

						<?php
							session_start();
							if($_SESSION['lsgd']!=null) {
								$lsgd = $_SESSION['lsgd'];
								foreach ($lsgd as $l) {
						?>
								<tr>
									<td><?php echo $l['Id']; ?></td>
									<td><?php echo $l['SoTaiKhoan']; ?></td>
									<td><?php echo number_format($l['SoTien'], 0, ',') . ' VND'; ?></td>
									<td><?php echo $l['GhiChu']; ?></td>
									<td><?php echo $l['NgayRutTien']; ?></td>
								</tr>
							<?php }} ?>
						
					</table>
				</div>
			</div>
		</div>
		
		<div id="menu">
			<div class="contain">
				<div class="col">
					<button onclick="location.href='/_PHP/ATM_mvc/Controllers/atmController.php'" type="button" class="btn btn-warning">Trở lại</button>
				</div>
			</div>
		</div>
	</div>
</body>


</html>