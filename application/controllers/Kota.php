<?php 

class Kota extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this -> load -> model('Mcrud');
        $this->load->model('Madmin');
    }

    public function index() {
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota') -> result();
        $this -> template -> load('layout_admin', 'admin/kota/index' ,$data);
    }

    public function getid($id) {
        $dataWhere = array('idKota' => $id);
        $data['kota'] = $this -> Mcrud ->  get_by_id('tbl_kota', $dataWhere) -> row_object();
        $this -> template -> load('layout_admin', 'admin/kota/form_edit', $data);
    }

    public function edit() {
        $id = $this -> input -> POST('id');
        $namaKota = $this -> input -> POST('namaKota');

        $dataUpdate = array('namaKota' => $namaKota);
        $this -> Mcrud -> update('tbl_kota', $dataUpdate, 'idKota', $id);
        $this->session->set_flashdata('pesan','Data berhasil di ubah.'); 
        redirect('kota');
    }


    public function add() {
        $this -> template -> load('layout_admin','admin/kota/form_add');
    }

    public function hapus($id) {
        $this -> load -> model('Madmin');
        $count_kota = $this -> Madmin -> cek_kota($id) -> num_rows();
        if ($count_kota > 0 ){
            $this->session->set_flashdata('pesan','Data kota tidak boleh di hapus !!'); 
            redirect('kota');
        } else {
            $where = array('idKota' => $id);
            $this -> Mcrud -> hapus_data($where, 'tbl_kota');
            $this->session->set_flashdata('pesan','Data berhasil di hapus !!'); 
            redirect('kota');
        }
      
    }

    public function save() {
        $namaKota = $this -> input -> POST('namaKota');
        $dataInsert = array('namaKota' => $namaKota);
        if(empty($this->session->userdata('namaKota'))){
            $this->session->set_flashdata('pesan','Data gagal ditambahkan');
            redirect('kota');
        } else {
            $this -> Mcrud -> insert('tbl_kota', $dataInsert);
            $this->session->set_flashdata('pesan','Data berhasil di tambah.');
            redirect('kota');
        }      
    }

}




?>