<%@page import="java.util.Locale"%>
<%@page import="java.text.NumberFormat"%>
<%@page import="bean.taikhoanbean"%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Vấn tin TK</title>
	<link rel="icon" href="./assets/image/icon/icon.png">
	<link rel="stylesheet" href="./assets/css/vantintk.css">
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
				<% taikhoanbean tk = (taikhoanbean) session.getAttribute("tk"); %>
				<p><%=tk.getHoTen()%> - <%=tk.getSoTaiKhoan()%></p>
				<p>(VIETINBANK)</p>
			</div>
			<div class="desc">
				<div>
					<p>Số tiền:</p>
				</div>
				<div>
					<%
						NumberFormat en = NumberFormat.getInstance(new Locale("en", "EN"));
					%>
					<p><%=en.format(tk.getSoTien())%> VND</p>
				</div>
			</div>
		</div>
		
		<div id="menu">
			<div class="contain">
				<div class="col">
					<button onclick="location.href='atmController'" type="button" class="btn btn-warning">Trở lại</button>
				</div>
			</div>
		</div>
	</div>
</body>


</html>