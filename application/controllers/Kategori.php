<?php 

class Kategori extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        // $this->cek_login();
    }

    // private function cek_login(){
    //     if(empty($this->session->userdata('userName'))){
    //         redirect('adminpanel');
    //     }
    // }
    
    public function index() {
        $data['kategori'] = $this-> Mcrud -> get_all_data('tbl_kategori') -> result();
        $this -> template -> load('layout_admin','admin/kategori/index', $data);
    }


    public function add() {
        $this -> template -> load('layout_admin','admin/kategori/form_add');
    }


    // public function save() {
    //     $namaKategori = $this -> input -> POST('namaKategori');
    //     $dataInsert = array('namaKat' => $namaKategori);
    //         if(empty($this->session->userdata('namaKat'))){
    //             $this->session->set_flashdata('pesan','Data gagal ditambahkan');
    //             redirect('kategori');
    //         } else {
    //                 $this -> Mcrud -> insert('tbl_kategori', $dataInsert);
    //                 $this->session->set_flashdata('pesan','Data berhasil di tambah.');
    //                 redirect('kategori');
    //         }    
    // }

    public function save()
    {
        // Memanggil library CI3 Form Validation
        $this->load->library('form_validation');

        // Dalam Form Validation di set rules nya kek gimana 
        $this->form_validation->set_rules(
            'namaKategori',
            ' ',
            'required'
        );

        // Jika Form Validation tidak jalan maka pesan data harus diisi
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', 'Data gagal ditambahkan');
            redirect('kategori');
        } else {
            $namaKategori = $this->input->POST('namaKategori');

            $dataInsert = array('namaKat' => $namaKategori);

            $this->Mcrud->insert('tbl_kategori', $dataInsert);
            $this->session->set_flashdata('pesan', 'Data Kategori Berhasil Ditambah');
            redirect('kategori');
        }
    }

    // public function save() {
    //     $namaKategori = $this -> input -> POST('namaKategori');
    //     $dataInsert = array('namaKat' => $namaKategori);
    //     $this -> Mcrud -> insert('tbl_kategori', $dataInsert);
    //     $this->session->set_flashdata('pesan','Data berhasil di tambah.');
    //     redirect('kategori');
    // }


    public function getid($id) {
        $dataWhere = array('idKat' => $id);
        $data['kategori'] = $this -> Mcrud ->  get_by_id('tbl_kategori', $dataWhere) -> row_object();
        $this -> template -> load('layout_admin', 'admin/kategori/form_edit', $data);
    }


    public function edit() {
        $id = $this -> input -> POST('id');
        $namaKategori = $this -> input -> POST('namaKategori');
        $dataUpdate = array('namaKat' => $namaKategori);
        $this -> Mcrud -> update('tbl_kategori', $dataUpdate, 'idKat', $id);
        $this->session->set_flashdata('pesan','Data berhasil di ubah.'); 
        redirect('kategori');
    }


    public function hapus($id) {
        $where = array('idKat' => $id);
        $this -> Mcrud -> hapus_data($where, 'tbl_kategori');
        $this->session->set_flashdata('pesan','Data berhasil di Hapus !! ');
        redirect('kategori');
    }

}



?>