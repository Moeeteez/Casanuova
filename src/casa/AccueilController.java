
package casa;

import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.layout.Pane;
import java.sql.*;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.control.Alert;
import javafx.scene.control.TableRow;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javax.swing.JOptionPane;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXTextField;
import entitites.user;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.GridPane;

/**
 * FXML Controller class
 *
 * @author Moetez
 */
public class AccueilController implements Initializable {

    @FXML
    private TableView<user> table;
    @FXML
    private JFXButton edit;
    @FXML
    private JFXButton add;
    @FXML
    private JFXButton delete;
    @FXML
    private TableColumn<user, String> cin;
    @FXML
    private TableColumn<user, String> np;
    @FXML
    private TableColumn<user, String> email;
    @FXML
    private TableColumn<user, String> tel;
    @FXML
    private TableColumn<user, String> reg;
    @FXML
    private TableColumn<user, String> nomu;
    @FXML
    private TableColumn<user, String> mdp;
    @FXML
    private TableColumn<user, String> etat;
    @FXML
    private JFXTextField txtcin;
    @FXML
    private JFXTextField txtnp;
    @FXML
    private JFXTextField txtemail;
    @FXML
    private JFXTextField txttel;
    @FXML
    private JFXTextField txtreg;
    @FXML
    private JFXTextField txtnomu;
    @FXML
    private JFXTextField txtmdp;
    @FXML
    private JFXTextField txtetat ;
    @FXML
    private GridPane pnu;
     @FXML
    private GridPane pna;
     @FXML
    private JFXButton btn1;
    @FXML
    private JFXButton btn2;

    
    @FXML
    private void handleButtonAction(ActionEvent event) {
        System.out.println("click");
//        if(event.getSource() == btn1){
//            pnu.toFront(); }
//        else if(event.getSource() == btn2){
//            pnu.toFront(); }
        if(event.getSource() == add){
           pna.toFront();
        }else if(event.getSource() == edit){
            modifierUser();
        }else if(event.getSource() == delete){
        SupprimerUser();
      
        }}

    @FXML
    private void handleMouseAction(MouseEvent event) {  
        user usr = table.getSelectionModel().getSelectedItem();
        txtcin.setText("" +usr.getCin());
        txtemail.setText("" +usr.getEmail());
        txtnp.setText(""+usr.getNp());
        txttel.setText("" +usr.getTel());
        txtreg.setText(""+usr.getRegion());
         txtnomu.setText("" +usr.getNomu());
        txtmdp.setText(""+usr.getPwd());
        txtetat.setText("" +usr.getEtat());
   } 

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        AfficherUsers() ;
//          pnu.toFront(); 
    }  
    
    public Connection getConnection(){
    Connection con;
    try{
        con = DriverManager.getConnection("jdbc:mysql://localhost:3306/casanuova?serverTimezone=UTC", "root", "");
        return con;
    }catch(Exception ex){
        System.out.println("Error: " + ex.getMessage());
        return null;
    }
}
    public ObservableList<user> getList(){
        ObservableList<user> users = FXCollections.observableArrayList();
        Connection con = getConnection();
        String query = "SELECT * FROM user";
        Statement st;
        ResultSet rs;
        
        try{
            st=con.createStatement();
            rs=st.executeQuery(query);
            user u1;
            while(rs.next()){
                u1 = new user(rs.getString("cin"),rs.getString("NomPrenom"),rs.getString("email"),rs.getString("Tel"),
                        rs.getString("Region"),rs.getString("NomU"),rs.getString("MDP"),rs.getString("Etat"));
                System.out.println(u1.getPwd());
                users.add(u1);

            }
        }catch(Exception ex){
            ex.printStackTrace();
        }
        return users;   
    }
    public void AfficherUsers(){
        ObservableList<user> list = getList();
        cin.setCellValueFactory(new PropertyValueFactory<user, String>("cin"));
        np.setCellValueFactory(new PropertyValueFactory<user, String>("np"));
        email.setCellValueFactory(new PropertyValueFactory<user, String>("Email"));
        tel.setCellValueFactory(new PropertyValueFactory<user, String>("Tel"));
        reg.setCellValueFactory(new PropertyValueFactory<user, String>("Region"));
        nomu.setCellValueFactory(new PropertyValueFactory<user, String>("nomu"));
        mdp.setCellValueFactory(new PropertyValueFactory<user, String>("pwd"));
        etat.setCellValueFactory(new PropertyValueFactory<user, String>("Etat"));
        table.setItems(list);
    }
     public void AjouterUser(){
        Connection con = getConnection();
        Statement st;

        if(txtcin.getText().length() > 8 || txtcin.getText().length() < 8){
            JOptionPane.showMessageDialog(null,"cin non valide, cin doit étre contient 8 chiffres");
        }else{
        try{
            String stat = "actif" ;
String query = "INSERT INTO `user`(`CIN`,`NomPrenom`,`Email`,`MDP`,`Tel`,`NomU`,`Region`,`Etat`) VALUES ('" + txtcin.getText() + "',' "+ txtnp.getText() + "',' "+ txtemail.getText() + "',' "+ txtmdp.getText()+ "',' "+ txttel.getText() + "','"
             + txtnp.getText()+"','"+ txtreg.getText() +"', '"+ stat + "')";
        st=con.createStatement();  
        st.executeUpdate(query);
        AfficherUsers();
                }catch(Exception ex){
        System.out.println("Error: " + ex.getMessage());
    }
        }
    }
private void modifierUser(){
        Connection con = getConnection();
        Statement st;        
        try{
String query = "UPDATE user SET CIN= '" + txtcin.getText() + "',NomPrenom=' "+ txtnp.getText() + "',Email=' "+ txtemail.getText() + "',MDP=' "+ txtmdp.getText()+ "',Tel=' "+ txttel.getText() + "',NomU=' "+ txtnp.getText() + "',Region='"+ txtreg.getText() +"',Etat=stat) VALUES (,,,' "+ txtmdp.getText()+ "' WHERE cin ="+ txtcin.getText() + "";
        st=con.createStatement();  
        st.executeUpdate(query);
        AfficherUsers();
                }catch(Exception ex){
        System.out.println("Error: " + ex.getMessage());
    }
}
         private void SupprimerUser(){
        Connection con = getConnection();
        Statement st;
        try{
        String query = "DELETE FROM user WHERE CIN = " + txtcin.getText() +"";
         st=con.createStatement();  
        st.executeUpdate(query);
                AfficherUsers();

        }catch(Exception ex){
        System.out.println("Error: " + ex.getMessage());
    }
}
}
