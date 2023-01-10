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
import dao.dangkydao;

/**
 * Servlet implementation class dangkyController
 */
@WebServlet("/dangkyController")
public class dangkyController extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public dangkyController() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		request.setCharacterEncoding("utf-8");
  	 	response.setCharacterEncoding("utf-8");
		
		String hoten = request.getParameter("txthotendk");
		String un = request.getParameter("txtundk");
		String pass = request.getParameter("txtpassdk");
		String checkpass = request.getParameter("txtcheckpassdk");
		
		RequestDispatcher rd = null;
		HttpSession session = request.getSession();
		session.setAttribute("ktdk", true);
		
		if((hoten==null || un==null || pass==null || checkpass==null) || !pass.equals(checkpass) || (hoten.equals("") || un.equals("") || pass.equals("") || checkpass.equals(""))) {
			session.setAttribute("ktdk", false);
			rd = request.getRequestDispatcher("dangnhap.jsp");
		}
		else {
			dangkydao dk = new dangkydao();
			taikhoanbean tk = dk.dangky(un, pass, hoten);
			if(tk!=null) {
				session.setAttribute("tk", tk);
				session.removeAttribute("ktdk");
				rd = request.getRequestDispatcher("atmController");
			}
			else {
				session.setAttribute("ktdk", false);
				rd = request.getRequestDispatcher("dangnhap.jsp");
			}
		}
		
		rd.forward(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
