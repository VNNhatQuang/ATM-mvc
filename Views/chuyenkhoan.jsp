<%@page import="bean.taikhoanbean"%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Chuyển khoản</title>
	<link rel="icon" href="./assets/image/icon/icon.png">
	<link rel="stylesheet" href="./assets/css/chuyenkhoan.css">
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
				<p>Quý khách vui lòng điền thông tin chuyển khoản</p>
			</div>
		</div>
		
		<div id="menu">
		
			<form action="chuyenkhoanController" method="post">
				<div class="contain">
					<p>Nhập STK nhận:</p>
					<%	String tk = "";
						if(session.getAttribute("tknhan")!=null) { 
							taikhoanbean tknhan = (taikhoanbean) session.getAttribute("tknhan");
							tk = tknhan.getSoTaiKhoan();
						}
					%>
					<input type="text" name="stknhan" class="form-control form-control-lg" placeholder="Nhập STK nhận" value="<%=tk %>">
				</div>
				<div class="contain">
					<p>Số tiền chuyển:</p> 
					<input type="number" name="sotien" class="form-control form-control-lg" min="1000" max="30000000" placeholder="VND">
				</div>
				<div class="contain">
					<p style="font-size: 15px">Tối thiểu : 1,000 VND</p> 
					<p style="font-size: 15px">Tối đa : 30,000,000 VND</p>
				</div>
				
				<div id="menu-sub">
					<div class="col1">
						<input name="xacnhantk" type="submit" class="btn btn-primary" value="Xác nhận tài khoản">
					</div>
					<%
						if(session.getAttribute("tknhan")!=null) {
							taikhoanbean tknhan = (taikhoanbean) session.getAttribute("tknhan");
					%>
						<span>STK : <%=tknhan.getHoTen()%> - <%=tknhan.getSoTaiKhoan()%></span>
					<%} %>
					
					<%	
						if(session.getAttribute("checktk")!=null) {
					%>
						<span>Số tài khoản không tồn tại</span>
					<%} %>
					<div class="col2">
						<% if(session.getAttribute("tknhan")!=null) { %>
							<input name="chuyenkhoan" type="submit" value="Chuyển khoản" class="btn btn-warning">
						<%} else { %>
							<input name="chuyenkhoan" type="text" value="Chuyển khoản" readonly="readonly" class="btn btn-secondary">
						<%} %>
						<a href="atmController" class="btn btn-warning">Trở lại</a>
					</div>
				</div>
			</form>
			
		</div>
	</div>
</body>


</html>