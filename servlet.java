 import javax.servlet.*; 
 import javax.servlet.http.*;
 import java.io.*; 
 
 public class DServlet extends HttpServlet { 
 
 public void service(HttpServletRequest req, HttpServletResponse res) throws IOException, ServletException  {      
 String name = req.getParameter("nm");
 String age = req.getParameter("age"); 
 res.setContentType("text/html");     
 PrintWriter out = res.getWriter(); 
 out.println("<B>My Name is:"+name);      
 out.println("<B>and My age is "+age);     
 out.close();  } }
