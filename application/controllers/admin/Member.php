<?php 

class Member extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->model('Madmin');
        $this->load->model('Mmember');
    }

    public function act_login(){
        $u = $this -> input -> POST('username');
        $p = $this -> input -> POST('password');

        $cek = $this -> Mmember -> cek_login($u, $p) -> num_rows();
        $result = $this -> Mmember -> cek_login($u, $p) -> result();

        if ($cek == 1){
            $data_session = array(
                'userName' => $u,
                'id' => $result -> idKonsumen,
                'status' => 'login'
            );

            $this -> session -> set_userdata($data_session);
            redirect('member');
        } else {
            $this -> session -> set_flashdata('pesan', 'Username/Password tidak sesuai');
            redirect('home/login');
        }

    }

    public function index() {
        $data['member'] = $this -> Madmin -> get_member() -> result();
        $this -> template -> load('layout_admin', 'admin/member/index', $data);
    }


    public function add() {
        $data['kota'] = $this -> Mcrud -> get_all_data('tbl_kota') -> result();
        $this -> template -> load('layout_admin','admin/member/form_add');
    }


    public function aktif($id) {
        $dataUpdate = array('statusAktif'=> 'Y');
        $this -> Mcrud -> update('tbl_member', $dataUpdate, 'idKonsumen', $id);
        redirect('admin/member');
    }


    public function non_aktif($id) {
        $dataUpdate = array('statusAktif' => 'N');
        $this -> Mcrud -> update('tbl_member', $dataUpdate, 'idKonsumen', $id);
        redirect('admin/member');
    }

    
     public function save() {
        $username = $this -> input -> POST('username');
        $password = $this -> input -> POST('password');
        $namaKonsumen = $this -> input -> POST('namaKonsumen');
        $alamat = $this -> input -> POST('alamat');
        $idKota = $this -> input -> POST('idKota');
        $email = $this -> input -> POST('email');
        $tlpn = $this -> input -> POST('tlpn');
       

       $dataInsert = array('username' => $username, 
      'password' => $password, 
         'namaKonsumen' => $namaKonsumen,
       'alamat' => $alamat,
       'idKota' => $idKota,
       'email' => $email,
     'tlpn' => $tlpn,
        
 );
         $this -> Mcrud -> insert('tbl_member', $dataInsert);
     $this->session->set_flashdata('pesan','Data berhasil di Tambahkan.'); 
     redirect('admin/member');
     }

}




?>