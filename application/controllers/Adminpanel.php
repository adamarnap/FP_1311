<?php 

class Adminpanel extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this -> load -> model('Madmin');
    }

    public function index(){
        $this->load->view('admin/form_login');
    }

    public function dashboard(){
        if(empty($this->session->userdata('userName'))){
            redirect('adminpanel');
        } 
            $this->template->load('layout_admin','admin/dashboard');      
    }

    public function dashboard_user(){
        if(empty($this->session->userdata('userName'))){
            redirect('adminpanel');
        } 
            $this->template->load('layout_user','admin/dashboard');      
    }
}

?>