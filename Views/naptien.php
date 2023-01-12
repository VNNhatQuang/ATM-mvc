<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nạp tiền</title>
	<link rel="icon" href="./assets/image/icon/icon.png">
	<link rel="stylesheet" href="./assets/css/ruttiensokhac.css">
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
				<p>Mời quý khách nhập số tiền muốn nạp</p>
			</div>
		</div>
		
		<div id="menu">
			<form action="/_PHP/ATM_mvc/Controllers/naptienController.php" method="post">
				<input type="number" min="0" name="st" class="form-control form-control-lg" placeholder="Nhập số tiền">
				<div class="col">
					<input type="submit" value="Nạp tiền" class="btn btn-warning">
					<a href="/_PHP/ATM_mvc/Views/atm.php" class="btn btn-warning">Trở lại</a>
				</div>
			</form>
		</div>
		
	</div>
	
</body>


</html>