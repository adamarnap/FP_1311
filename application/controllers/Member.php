<?php 

class Member extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        // $this->load->model('Madmin');
        $this->load->model('Mfrontend');
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
                'id' => $result[0] -> idKonsumen,
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
        $data['kategori'] = $this -> Mfrontend -> get_all_kategori() -> result();
        $this -> template -> load('layout_frontend', 'frontend/user_menu', $data);
    }


    // public function add() {
    //     $data['kota'] = $this -> Mcrud -> get_all_data('tbl_kota') -> result();
    //     $this -> template -> load('layout_admin','admin/member/form_add');
    // }


    // public function aktif($id) {
    //     $dataUpdate = array('statusAktif'=> 'Y');
    //     $this -> Mcrud -> update('tbl_member', $dataUpdate, 'idKonsumen', $id);
    //     redirect('member');
    // }


    // public function non_aktif($id) {
    //     $dataUpdate = array('statusAktif' => 'N');
    //     $this -> Mcrud -> update('tbl_member', $dataUpdate, 'idKonsumen', $id);
    //     redirect('member');
    // }

    
    // public function save() {
    //     $username = $this -> input -> POST('username');
    //     $password = $this -> input -> POST('password');
    //     $namaKonsumen = $this -> input -> POST('namaKonsumen');
    //     $alamat = $this -> input -> POST('alamat');
    //     $idKota = $this -> input -> POST('idKota');
    //     $email = $this -> input -> POST('email');
    //     $tlpn = $this -> input -> POST('tlpn');
       

    //     $dataInsert = array('username' => $username, 
    //     'password' => $password, 
    //     'namaKonsumen' => $namaKonsumen,
    //     'alamat' => $alamat,
    //     'idKota' => $idKota,
    //     'email' => $email,
    //     'tlpn' => $tlpn,
        
    // );
    //     $this -> Mcrud -> insert('tbl_member', $dataInsert);
    //     $this->session->set_flashdata('pesan','Data berhasil di Tambahkan.'); 
    //     redirect('member');
    // }

    public function transaksi(){
        $data['kategori'] = $this -> Mfrontend -> get_all_kategori() -> result();
        $this -> template -> load('layout_frontend','frontend/member_transaksi', $data);
    }

    public function toko(){
        $data['kategori'] = $this -> Mfrontend -> get_all_kategori() -> result();
        $data['toko'] = $this -> Mmember -> get_toko_by_member() -> result_array();
        $this -> template -> load('layout_frontend','frontend/member_toko', $data);
    }

    public function saran(){  
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/saran', $data);
     } 
     public function saran_coba(){  
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/saran', $data);
     } 
     public function saran_add(){
        $penilaian_tampilan = $this->input->post('penilaian_tampilan');  
        $penilaian_penggunaan=$this->input->post('penilaian_penggunaan');
        $keterangan = $this->input->post('keterangan'); 
        $rw = $this->input->post('rw');
        $dataInsert = array('penilaian_tampilan'=>$penilaian_tampilan ,'penilaian_penggunaan'=>$penilaian_penggunaan, 'keterangan'=>$keterangan, 'rw'=>$rw); 
        $this->Mcrud->insert('tbl_saran', $dataInsert); 
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('pesan','Saran Berhasil diKirim');    
        };
        redirect('saran');  
    
     }

    public function create_toko(){
        $data['kategori'] = $this -> Mfrontend -> get_all_kategori() -> result();
        $this -> template -> load('layout_frontend','frontend/form_create_toko', $data);
    }

    public function insert_toko(){
        $id = $this -> session -> userdata('id');
        $nama_toko = $this -> input -> POST('nama_toko');
        $deskripsi = $this -> input -> POST('deskripsi');
        
        $config['upload_path'] = './upload_logo_toko/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this -> load -> library('upload', $config);

            if($this -> upload -> do_upload('logo_toko')){
                $data_file = $this -> upload -> data();
                $data_insert = array(
                    'idKonsumen' => $id,
                    'namaToko' => $nama_toko,
                    'logo' => $data_file['file_name'],
                    'deskripsi' => $deskripsi,
                    'StatusAktif' => 'Y' 
                );
                // echo $id;
                // exit();
                $this -> Mmember -> insert_toko($data_insert);             
                redirect('member/toko'); 
            } else {
                redirect('member/create_toko');
            }

    }

    public function logout(){
        $this -> session -> sess_destroy();
        redirect('home');
    }




//con feedback
}

  
 



?>