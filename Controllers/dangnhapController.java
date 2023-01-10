package Controller;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import dao.dangnhapdao;

/**
 * Servlet implementation class dangnhapController
 */
@WebServlet("/dangnhapController")
public class dangnhapController extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public dangnhapController() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String un = request.getParameter("txtun");
		String pass = request.getParameter("txtpass");
		RequestDispatcher rd;
		dangnhapdao dndao = new dangnhapdao();
		HttpSession session = request.getSession();
		session.setAttribute("ktdn", true);
		session.removeAttribute("ktdk");
		
		
		if(un!=null && pass!=null) {
			if(dndao.ktdn(un, pass)!=null) {
				session.setAttribute("tk", dndao.ktdn(un, pass));
				rd = request.getRequestDispatcher("atmController");
			}
			else {
				session.setAttribute("ktdn", false);
				rd = request.getRequestDispatcher("dangnhap.jsp");
			}
		}
		else {
			rd = request.getRequestDispatcher("dangnhap.jsp");
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
