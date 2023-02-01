<?php 

class Login extends CI_Controller
{
    public function aksi_login() {

        $this -> load -> model('Mlogin');

        $u = $this -> input -> POST('userName');
        $p = $this -> input -> POST('password');
    

        $cek = $this -> Mlogin -> cek_login($u, $p) -> num_rows();

        if ($cek == TRUE ){
            $data_session = array(
                'userName' => $u,              
                'status' => 'login'
            );

            $this -> session -> set_userdata($data_session);
            redirect('adminpanel/dashboard');
            
        } else if($cek == TRUE){
            $data_session = array(
                'userName' => $u,              
                'status' => 'login'
            );

            $this -> session -> set_userdata($data_session);
            redirect('home');

        } else {
            $this -> session -> set_flashdata('pesan', 'Username/Password Tidak sesuai.');
            redirect('adminpanel');
        }

    }

    public function logout() {
        $this -> session -> sess_destroy();
        redirect('adminpanel');
    }
}




?>