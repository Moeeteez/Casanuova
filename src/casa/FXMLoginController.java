
package casa;

import Utilis.ConnectionUtil;
import Utilis.EnvoyerEmail;
import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXPasswordField;
import com.jfoenix.controls.JFXTextField;

import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.image.Image ;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;
import javafx.event.ActionEvent;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.input.MouseEvent;
import javax.swing.JOptionPane;





public class FXMLoginController implements Initializable {

   @FXML private ImageView imageLogo ;
   @FXML public  JFXTextField txtUsername ;
   @FXML private JFXPasswordField  txtPassword ;
   @FXML public JFXButton exit ;
   @FXML private JFXButton LOGIN;
   
    Connection con ;
    PreparedStatement pst ;
    ResultSet rs ;
    @FXML
    private JFXButton sinscrire;
    @FXML
    private Label dza;
        
     @FXML
    public void handleClose (ActionEvent event){
        if(event.getSource() == exit){
        System.exit(0);
        }
 
}
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        Image img = new Image("/casa/img/logo.gif");
        imageLogo.setImage(img);
    }

 @FXML
      public void login (ActionEvent event) throws IOException, Exception{
         
          
       String namu= txtUsername.getText();
       String pwd = txtPassword.getText() ;
       if(namu.equals("") ||  pwd.equals("")){
           error() ;
           return ;
       }
       int Status = ConnectionUtil.checkLogin(namu,pwd) ;
       
         switch(Status) {
             case 0 :Utility.changeToScene(getClass(), event, "Accueil.fxml"); check () ;break ;
             case -1 :JOptionPane.showMessageDialog(null, "Connection Failed") ; break ;
             case 1 : error() ; break ;
             
         
    }

      }
    public void check () {
        {
          Notifications notification = Notifications.create() ;
            notification.title("Succés!") ;
            notification.text("Bienvenue ! ") ;
            notification.hideAfter(Duration.seconds(5));
            notification.position(Pos.BASELINE_RIGHT) ;
            notification.show() ;   
        }
    }

       public void error () {
            Notifications notification = Notifications.create() ;
            notification.title("Error") ;
            notification.text("nom d'utilisateur ou mot de passe incorrect !!!") ;
            notification.hideAfter(Duration.seconds(5));
            notification.position(Pos.BASELINE_RIGHT) ;
            notification.show() ;   
        }

    @FXML
    public void signin (ActionEvent event)throws IOException {
  
        Stage stage = new Stage() ;
            Parent root= FXMLLoader.load(getClass().getResource("CCOmpte.fxml")) ;
            Scene scene = new Scene(root) ;
            stage.initStyle(StageStyle.UNDECORATED); 
            stage.setScene(scene);
            stage.show();
            ((Node)event.getSource()).getScene().getWindow().hide();
        
    }



    @FXML
    private void email(MouseEvent event) {
        
           try {
               
               
               EnvoyerEmail.sendMail(EnvoyerEmail.retouremail(txtUsername.getText()));
         

         } catch (Exception ex) {
            System.out.println(ex.getMessage());
        }  
        
    }

   
  
} 
