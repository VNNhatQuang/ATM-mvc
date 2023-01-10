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
import dao.atmdao;

/**
 * Servlet implementation class naptienController
 */
@WebServlet("/naptienController")
public class naptienController extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public naptienController() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		HttpSession session = request.getSession();
		taikhoanbean tk = (taikhoanbean) session.getAttribute("tk");
		
		
		if(tk==null) {
			response.sendRedirect("dangnhapController");
		}
		else {
			RequestDispatcher rd;
			// Xử lý chạy lần đầu
			if(request.getParameter("st")==null) {
				rd = request.getRequestDispatcher("naptien.jsp");
			}
			else {
				if(request.getParameter("st").equals("")) {
					rd = request.getRequestDispatcher("giaodichthatbai.jsp");
				}
				else {
					long st = Long.parseLong(request.getParameter("st"));
					atmdao atm = new atmdao();
					atm.NapTien(tk.getSoTaiKhoan(), st);
					rd = request.getRequestDispatcher("giaodichthanhcong.jsp");
				}
			}
			rd.forward(request, response);
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
