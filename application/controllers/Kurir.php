<?php 

class Kurir extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this -> load -> model('Mcrud');
        $this -> load -> model('Madmin');
    }

    public function index() {
        $data['kurir'] = $this -> Mcrud -> get_all_data('tbl_kurir') -> result();
        $this -> template -> load('layout_admin', 'admin/kurir/index' ,$data);
    }

    public function getid($id) {
        $dataWhere = array('idKurir' => $id);
        $data['kurir'] = $this -> Mcrud ->  get_by_id('tbl_kurir', $dataWhere) -> row_object();
        $this -> template -> load('layout_admin', 'admin/kurir/form_edit', $data);
    }

    public function edit() {
        $id = $this -> input -> POST('id');
        $namaKurir = $this -> input -> POST('namaKurir');

        $dataUpdate = array('namaKurir' => $namaKurir);
        $this -> Mcrud -> update('tbl_kurir', $dataUpdate, 'idKurir', $id);
        $this->session->set_flashdata('pesan','Data berhasil di Edit !! '); 
        redirect('kurir');
    }


    public function add() {
        $this -> template -> load('layout_admin','admin/kurir/form_add');
    }

    public function hapus($id) {
        $datawhere = array('idKurir'=>$id); 
        $data['kurir'] = $this->Mcrud->get_by_id('tbl_kurir', $datawhere)->row_object();  
        $count_kurir = $this->Madmin->cek_kurir($id)->num_rows();  
        if($count_kurir>0){ 
            $this->session->set_flashdata('successhapus','Data tidak Dapat Dihapus'); 
            redirect('admin/kurir');
        } else {
        $this->Mcrud->delete('tbl_kurir', $datawhere, 'idKurir', $id);  
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('success','Data Berhasil Dihapus');    
        redirect('admin/kurir');
        } 
    }
}

    public function save() {
        $namaKurir = $this -> input -> POST('namaKurir');
        $dataInsert = array('namaKurir' => $namaKurir);
        $this -> Mcrud -> insert('tbl_kurir', $dataInsert);
        $this->session->set_flashdata('pesan','Data berhasil di tambah !! '); 
        redirect('kurir');
    }

    


}




?>