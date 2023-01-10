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
import dao.dangnhapdao;

/**
 * Servlet implementation class xulyruttienController
 */
@WebServlet("/xulyruttienController")
public class xulyruttienController extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public xulyruttienController() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		RequestDispatcher rd;
		if(request.getParameter("st")!=null && !request.getParameter("st").equals("")) {
			int st =  Integer.parseInt(request.getParameter("st"));
			HttpSession session = request.getSession();
			taikhoanbean tk = (taikhoanbean) session.getAttribute("tk");

			if(tk!=null) {
				if(st%50000==0) {
					atmdao atm = new atmdao();
					if(atm.RutTien(tk.getSoTaiKhoan(), st)) {
						// Cập nhật lại biến session
						dangnhapdao dndao = new dangnhapdao();
						session.setAttribute("tk", dndao.ktdn(tk.getSoTaiKhoan(), tk.getMatKhau()));
						rd = request.getRequestDispatcher("giaodichthanhcong.jsp");
					}
					else
						rd = request.getRequestDispatcher("ruttienthatbai.jsp");
				}
				else {
					rd = request.getRequestDispatcher("ruttienthatbai.jsp");
				}
			}
			else {
				rd = request.getRequestDispatcher("dangnhapController");
			}
		}
		else {
			rd = request.getRequestDispatcher("ruttienthatbai.jsp");
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
