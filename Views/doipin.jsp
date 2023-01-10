<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Đổi PIN</title>
	<link rel="icon" href="./assets/image/icon/icon.png">
	<link rel="stylesheet" href="./assets/css/doipin.css">
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
				<p>Quý khách vui lòng nhập số PIN mới</p>
			</div>
		</div>
		
		<div id="menu">
			<form action="doipinController" method="post">
				<div class="contain">
					<p>Nhập PIN mới:</p> 
					<input type="password" name="pinmoi" class="form-control form-control-lg" placeholder="Nhập mã PIN">
				</div>
				<div class="contain">
					<p>Nhập lại PIN:</p> 
					<input type="password" name="checkpinmoi" class="form-control form-control-lg" placeholder="Nhập lại mã PIN">
				</div>
				<div class="col">
					<input type="submit" value="Đồng ý" class="btn btn-warning">
					<a href="atmController" class="btn btn-warning">Trở lại</a>
				</div>
			</form>
		</div>
	</div>
</body>


</html>