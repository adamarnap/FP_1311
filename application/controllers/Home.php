<?php 

class Home extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this -> load -> model('Mfrontend');
        // $this -> load -> model('Mcrud');
    }

    public function index(){
        $data['kategori'] = $this -> Mfrontend -> get_all_kategori() -> result();
        $data['produk_terbaru'] = $this -> Mfrontend -> get_all_produk_terbaru() -> result();
        $this -> template -> load('layout_frontend','frontend/home', $data);
    }

    public function login(){
        $data['kategori'] = $this -> Mfrontend -> get_all_kategori() -> result();
        $this -> template -> load('layout_frontend','frontend/login', $data);
    }

    public function register() {
        $data['kota'] = $this -> Mfrontend -> get_all_kota() -> result();
        $data['kategori'] = $this -> Mfrontend -> get_all_kategori() -> result();
        $this -> template -> load('layout_frontend', 'frontend/register', $data);
    }

    public function act_reg() {

    $this -> load -> library('form_validation');

    $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
    $this->form_validation->set_rules('password_confirm', 'Password_confirm', 'required|matches[password]');
    $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
    $this->form_validation->set_rules('no_telpon', 'No Telpon', 'trim|required');

    if($this -> form_validation->run() == FALSE ){
        $this -> session -> set_flashdata('pesan', validation_errors());
        redirect('home/register');
    } else {
        $nama = $this -> input -> POST('nama');
        $email = $this -> input -> POST('email');
        $username = $this -> input -> POST('username');
        $password = $this -> input -> POST('password');
        // $password_confirm = $this -> input -> POST('password_confirm');
        $alamat = $this -> input -> POST('alamat');
        $kota = $this -> input -> POST('kota');
        $no_telpon = $this -> input -> POST('no_telpon');
        
        $data_insert = array(
            'username' => $username,
            'password' => $password,
            'namaKonsumen' => $nama,
            'alamat' => $alamat,
            'idKota' => $kota,
            'email' => $email,
            'tlpn' => $no_telpon,
            'statusAktif' => 'Y'
        );
        $this -> Mcrud -> insert('tbl_member', $data_insert);

        $dataInsert = array(
   
                'username' => $username,
                'password' => $password,
                'level' => 'user'
            );

        $this -> Mcrud -> insert('tbl_admin', $dataInsert);
        redirect('home');

    }

    //     $namaKonsumen = $this -> input -> POST('namaKonsumen');
    //     $email = $this -> input -> POST('email');
    //     $username = $this -> input -> POST('username');
    //     $password = $this -> input -> POST('password');
    //     $password_confirm = $this -> input -> POST('password_confirm');
    //     $alamat = $this -> input -> POST('alamat');
    //     $idKota = $this -> input -> POST('idKota');
    //     $tlpn = $this -> input -> POST('tlpn');

    //     $dataInsert = array('namaKonsumen' => $namaKonsumen, 
    //     'email' => $email, 
    //     'username' => $username,
    //     'password' => $password,
    //     'alamat' => $alamat,
    //     'idKota' => $idKota,
    //     'tlpn' => $tlpn,
    // );

    //     $dataInsert = array(
   
    //     'username' => $username,
    //     'password' => $password,
    //     'level' => 'user'
    // );

    // if(empty($this->session->userdata('namaKonsumen'))){
    //     $this->session->set_flashdata('pesan','Nama harus diisi');
    //     redirect('home/register');
    // }
    // else {
    //     $this -> Mcrud -> insert('tbl_member', $dataInsert);
    //     $this -> Mcrud -> insert('tbl_admin', $dataInsert);
    //     $this->session->set_flashdata('pesan','Data berhasil di tambah.'); 
    //     redirect('home');
    // }      
    
    }

    public function logout() {
        $this -> session -> sess_destroy();
        redirect('frontend/home');
    }

}
?>