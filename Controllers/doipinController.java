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
 * Servlet implementation class doipinController
 */
@WebServlet("/doipinController")
public class doipinController extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public doipinController() {
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
			if(request.getParameter("pinmoi")==null || request.getParameter("checkpinmoi")==null) {
				rd = request.getRequestDispatcher("doipin.jsp");
			}
			else {
				String pinmoi = request.getParameter("pinmoi");
				String checkpinmoi = request.getParameter("checkpinmoi");
				if(pinmoi.equals("") || checkpinmoi.equals("") || !pinmoi.equals(checkpinmoi)) {
					rd = request.getRequestDispatcher("giaodichthatbai.jsp");
				}
				else {
					atmdao atm = new atmdao();
					atm.DoiMaPIN(tk.getSoTaiKhoan(), pinmoi);
					taikhoanbean tkm = new taikhoanbean(tk.getSoTaiKhoan(), tk.getHoTen(), tk.getSoTien(), pinmoi);
					session.setAttribute("tk", tkm);
					rd = request.getRequestDispatcher("doipinthanhcong.jsp");
					
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
