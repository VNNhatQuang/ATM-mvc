<!-- 
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		HttpSession session = request.getSession();
		taikhoanbean tk = (taikhoanbean) session.getAttribute("tk");
		
		if(tk==null) {
			response.sendRedirect("dangnhapController");
		}
		else {
			RequestDispatcher rd;
			dangnhapdao dndao = new dangnhapdao();
			// Cập nhật lại biến session
			session.setAttribute("tk", dndao.ktdn(tk.getSoTaiKhoan(), tk.getMatKhau()));
			rd = request.getRequestDispatcher("vantintk.jsp");
			rd.forward(request, response);
		}
	}
} -->

<?php

	session_start();
	$tk = $_SESSION['tk'];

	if($tk==null) {
		header('location: http://localhost/_PHP/ATM_mvc/Controllers/dangnhapController.php');
	}
	else {
		require_once('../Models/dangnhapModel.php');
		$dn = new DangNhapModel;
		// Cập nhật lại biến session
		$_SESSION['tk'] = $dn->ktdn($tk['SoTaiKhoan'], $tk['MatKhau']);
		header('location: http://localhost/_PHP/ATM_mvc/Views/vantintk.php');
	}

?>