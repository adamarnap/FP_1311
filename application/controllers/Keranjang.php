<?php 

class Keranjang extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this -> load -> model('Mcrud');
        $this -> load -> model('Madmin');
    }

    public function index() {
        $data['keranjang'] = $this -> Madmin -> get_keranjang() -> result();
        $this -> template -> load('layout_admin', 'admin/keranjang/index' ,$data);
    }

    // public function getid($id) {
    //     $dataWhere = array('idKurir' => $id);
    //     $data['kurir'] = $this -> Mcrud ->  get_by_id('tbl_kurir', $dataWhere) -> row_object();
    //     $this -> template -> load('layout_admin', 'admin/kurir/form_edit', $data);
    // }

    // public function edit() {
    //     $id = $this -> input -> POST('id');
    //     $namaKurir = $this -> input -> POST('namaKurir');

    //     $dataUpdate = array('namaKurir' => $namaKurir);
    //     $this -> Mcrud -> update('tbl_kurir', $dataUpdate, 'idKurir', $id);
    //     $this->session->set_flashdata('pesan','Data berhasil di Edit !! '); 
    //     redirect('kurir');
    // }


 public function add() {
    $this -> template -> load('layout_admin','admin/keranjang/form_add');
 }

    // public function hapus($id) {
    //     $where = array('idKurir' => $id);
    //     $this -> Mcrud -> hapus_data($where, 'tbl_kurir');
    //     $this->session->set_flashdata('pesan','Data berhasil di hapus !! '); 
    //     redirect('kurir');
    // }

    // public function save() {
    //     $namaKurir = $this -> input -> POST('namaKurir');
    //     $dataInsert = array('namaKurir' => $namaKurir);
    //     $this -> Mcrud -> insert('tbl_kurir', $dataInsert);
    //     $this->session->set_flashdata('pesan','Data berhasil di tambah !! '); 
    //     redirect('kurir');
    // }

    


}




?>