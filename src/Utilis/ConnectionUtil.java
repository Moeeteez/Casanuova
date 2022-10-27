
package Utilis;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;


public class ConnectionUtil {
    
    String user ="root" ;
    String pw ="" ;
    String url ="jdbc:mysql://localhost:3306/casanuova" ;
    private static ConnectionUtil instance ; 
    public static Connection Conx ;

    private ConnectionUtil() {
        try {
            Conx = DriverManager.getConnection(url,user,pw);
            System.out.println("connexion etablie") ;
        } catch (SQLException ex) {
           System.err.println(ex.getMessage());
            System.out.println("connexion failed");
        }
      
    }
 public static ConnectionUtil getInstance (){
           if (instance ==null)
               instance = new ConnectionUtil() ;
           return instance ;
 }
 public  Connection getConnection (){
     return Conx ;
 }

 public static int checkLogin (String username, String password ){
    Connection Conx =  ConnectionUtil.getInstance().getConnection();
     if (Conx == null)
         return -1 ;
     String sql ="SELECT * FROM user WHERE NomU=? AND MDP=?" ;
     try {
         PreparedStatement prst  = Conx.prepareStatement(sql) ;
         prst.setString(1,username) ;
         prst.setString(2,password);
       ResultSet rs =prst.executeQuery() ;
       
       while(rs.next()){
           return 0;
       }
     }catch (SQLException se ){
         System.out.println("sql error");
     }
           return 1 ;

 }
 
 }
 

    
            
    