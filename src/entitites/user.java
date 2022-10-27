
package entitites;

public class user {
    private String cin ;
    private String np ;
    private String email ;
    private String tel ;
    private String region ;
    private String nomu ;
    private String pwd ;
    private String etat ;
    
    
 public user(String cin){
     this.cin=cin;
 }
    public user(String cin ,String np , String email, String tel, String region, String nomu, String pwd, String etat) {
        this.cin = cin;
        this.np = np;   
        this.email = email;
        this.tel = tel;
        this.region = region;
        this.nomu = nomu;
        this.pwd = pwd;
        this.etat= etat ;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

    public String getNp() {
        return np;
    }

    public void setNp(String np) {
        this.np = np;
    }

    public String getCin() {
        return cin;
    }

    public void setCin(String cin) {
        this.cin = cin;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getTel() {
        return tel;
    }

    public void setTel(String tel) {
        this.tel = tel;
    }

    public String getRegion() {
        return region;
    }

    public void setRegion(String region) {
        this.region = region;
    }


    public String getNomu() {
        return nomu;
    }

    public void setNomu(String nomu) {
        this.nomu = nomu;
    }

    public String getPwd() {
        return pwd;
    }

    public void setPwd(String pwd) {
        this.pwd = pwd;
    }

}

