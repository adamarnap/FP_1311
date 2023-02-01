<?php 

class Mlogin extends CI_Model 
{
    public function cek_login($u, $p) {
        $q = $this -> db -> get_where('tbl_admin', array('userName' => $u, 'password' => $p));
        return $q;
    }


    public function get_admin(){
        $q = $this -> db -> query("SELECT * FROM tbl_admin WHERE level='admin'");
        return $q;
    }

    public function get_user(){
        $q = $this -> db -> query("SELECT * FROM tbl_admin WHERE level='user'");
        return $q;
    }


    // public function login_member($u, $p) {
    //     $q = $this -> db -> get_where('tbl_member', array('username' => $u, 'password' => $p));
    //     return $q;
    // }
}


?>