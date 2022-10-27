
package Utilis;

import casa.FXMLoginController;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Properties;
import javax.mail.Authenticator;
import javax.mail.Message;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;


public class EnvoyerEmail {
    public  static void sendMail(String recepient) throws Exception {
        System.out.println("preparing to send email");
        Properties properties = new Properties();
       
        properties.put("mail.smtp.auth","true");
        properties.put("mail.smtp.starttls.enable", "true");
        properties.put("mail.smtp.host", "smtp.gmail.com");
        properties.put("mail.smtp.port", "587");
       
        String myAccountEmail = "mohamedbaha.mestiri@esprit.tn ";
        String password="213JMT9494";
//         String myAccountEmail = "casanuovacontact@gmail.com";
//         String password="casanuovaesprit";
        Session session = Session.getDefaultInstance(properties, new Authenticator() {
            @Override
            protected PasswordAuthentication getPasswordAuthentication() {
                return new PasswordAuthentication(myAccountEmail, password);
            }
           
        } );
        Message message = prepareMessage(session,myAccountEmail,recepient);
        Transport.send(message);
        System.out.println("message sent successfully");
        System.out.println(recepient);
        
    }
//     public  String retourmdp (recepient) throws SQLException{
//        Connection Conx =  ConnectionUtil.getInstance().getConnection();
//        
//     String sql ="SELECT MDP FROM user WHERE NomU=?" ;
//     try {
//         PreparedStatement prst  = Conx.prepareStatement(sql) ;
//         prst.setString(1,recepient) ;
//        
//       ResultSet rs =prst.executeQuery() ;
//       
//       while(rs.next()){
//         return rs.getString(1);
//       }
//       } catch (Exception ex) {
//            System.out.println(ex.getMessage());
//       }
//        return null;
//    }
     
   private static Message prepareMessage(Session session, String myAccountEmail, String recepient){
        try {
            Message message = new MimeMessage(session);
            message.setFrom(new InternetAddress(myAccountEmail));
            message.setRecipient(Message.RecipientType.TO, new InternetAddress(recepient));
            message.setSubject("Récupérer mot de passe ");
            message.setText("<h1> Bonjour cher clien !!! vous avez demandé votre mot de passe</h1> votre mot de passe est :");
            return message;
        } catch (Exception ex) {
            System.out.println(ex);        }
        return null;
    }

    public static String retouremail (String username) throws SQLException{
        Connection Conx =  ConnectionUtil.getInstance().getConnection();
  
     String sql ="SELECT Email FROM user WHERE NomU=?" ;
     try {
         PreparedStatement prst  = Conx.prepareStatement(sql) ;
         prst.setString(1,username) ;
        
       ResultSet rs =prst.executeQuery() ;
       
       while(rs.next()){
         return rs.getString(1);
       }
       } catch (Exception ex) {
            System.out.println(ex.getMessage());
       }
        return null;
    }
    

}


    
