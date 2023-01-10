package Controller;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import bean.taikhoanbean;
import bo.tknhanbo;
import dao.atmdao;

/**
 * Servlet implementation class chuyenkhoanController
 */
@WebServlet("/chuyenkhoanController")
public class chuyenkhoanController extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public chuyenkhoanController() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		HttpSession session = request.getSession();
		RequestDispatcher rd;
		
		
		if(session.getAttribute("tk")!=null) {
			taikhoanbean tkadmin = (taikhoanbean) session.getAttribute("tk");
			
			// XÁC NHẬN TÀI KHOẢN
			if(request.getParameter("xacnhantk")!=null) {
				String tentk = request.getParameter("stknhan");
				// Kiểm tra tên tk nhận có rỗng không
				if(tentk.equals("")) {
					response.sendRedirect("chuyenkhoanController");
				}
				else {
					tknhanbo tknhanbo = new tknhanbo();
					taikhoanbean tknhan = tknhanbo.getTaiKhoan(tentk);
					if (tknhan==null) {
						response.sendRedirect("chuyenkhoanController");
						session.setAttribute("checktk", true);
					}
					else if(tkadmin.getSoTaiKhoan().equals(tknhan.getSoTaiKhoan())) {
						session.setAttribute("checktk", true);
						response.sendRedirect("chuyenkhoanController");
					}
					else {
						session.setAttribute("tknhan", tknhan);
						session.removeAttribute("checktk");
						rd = request.getRequestDispatcher("chuyenkhoan.jsp");
						rd.forward(request, response);
					}
				}
			}
			
			// CHUYỂN KHOẢN
			else if(request.getParameter("chuyenkhoan")!=null) {
				// Kiểm tra tính hợp lệ cuả tiền được nhập và tk nhận
				if(request.getParameter("sotien").equals("") || request.getParameter("stknhan").equals("")) {
					response.sendRedirect("chuyenkhoanController");
				}
				else {
					atmdao atm = new atmdao();
					String tknhan = request.getParameter("stknhan");
					long sotien = Long.parseLong(request.getParameter("sotien"));
					atm.ChuyenKhoan(tkadmin.getSoTaiKhoan(), sotien, tknhan);
					rd = request.getRequestDispatcher("giaodichthanhcong.jsp");
					rd.forward(request, response);
				}
			}
			
			// CHẠY LẦN ĐẦU
			else {
				session.removeAttribute("tknhan");
				rd = request.getRequestDispatcher("chuyenkhoan.jsp");
				rd.forward(request, response);
			}
		}
		
		
		else {
			response.sendRedirect("dangnhapController");
		}
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
