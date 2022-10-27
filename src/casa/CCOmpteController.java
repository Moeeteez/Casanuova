
package casa;
import Utilis.ConnectionUtil;
import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXPasswordField;
import com.jfoenix.controls.JFXTextField;
import static com.sun.org.apache.xalan.internal.xsltc.compiler.util.Type.String;
import de.jensd.fx.glyphs.fontawesome.FontAwesomeIconView;
import java.net.URL;
import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.input.MouseEvent;
import javafx.util.Duration;
import javax.swing.JOptionPane;
import org.controlsfx.control.Notifications;



public class CCOmpteController implements Initializable {
    Connection cnx =  ConnectionUtil.getInstance().getConnection();
    

     @FXML private FontAwesomeIconView back ;
    @FXML
    private JFXTextField txtNP;
    @FXML
    private JFXTextField txtcin;
    @FXML
    private JFXTextField txtmail;
    @FXML
    private JFXTextField txtreg;
    @FXML
    private JFXTextField txttel;
    @FXML
    private JFXTextField txtu;
    @FXML
    private JFXPasswordField txtpwd;
    @FXML
    private JFXButton sinscrire;
   
  
  
    @Override
    public void initialize(URL url, ResourceBundle rb) {

    }    
    
    
    @FXML
    public void backtoAccueil(MouseEvent event) throws Exception {
         Utility.changeToScene(getClass(), event, "FXMLogin.fxml");
    }
    

    @FXML
    private void sinscrire(ActionEvent event) {
          String regex = "^[A-Za-z0-9+_.-]+@(.+)$" ;
        if(txtcin.getText().length() > 8 || txtcin.getText().length() < 8){
            JOptionPane.showMessageDialog(null,"cin non valide, cin doit étre contient 8 chiffres"); }
        
            else if(txtreg.getText().length() < 1 || txttel.getText().length() < 1 || txtpwd.getText().length() < 1 || txtu.getText().length() < 1 || txtNP.getText().length() < 1) {
            JOptionPane.showMessageDialog(null,"champs vide !!!"); }
            else if (txtmail.getText().matches(regex)!=true){
            JOptionPane.showMessageDialog(null,"email invalid"); }
            else {
        
     String stat = "actif" ;
     String query = "INSERT INTO `user`(`CIN`,`NomPrenom`,`Email`,`MDP`,`Tel`,`NomU`,`Region`,`Etat`) VALUES ('" + txtcin.getText() + "',' "+ txtNP.getText() + "',' "+ txtmail.getText() + "',' "+ txtpwd.getText()+ "',' "+ txttel.getText() + "','"
             + txtu.getText()+"','"+ txtreg.getText() +"', '"+ stat + "')";
        Statement st ;
    try {
        st=cnx.createStatement() ;
        st.executeUpdate(query) ;
        check() ;
    }catch(SQLException ex ){
        System.err.println(ex.getMessage()) ;}
    }
    }
    public void check () {
       
          Notifications notification = Notifications.create() ;
            notification.title("Succés!") ;
            notification.text("Compte Ajouté ! ") ;
            notification.hideAfter(Duration.seconds(5));
            notification.position(Pos.BASELINE_RIGHT) ;
            notification.show() ;   
    }
}


