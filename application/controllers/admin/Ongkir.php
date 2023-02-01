<?php 

class Ongkir extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this -> load -> model('Mcrud');
        $this -> load -> model('Madmin');
    }

    public function index() {
        $data['ongkir'] = $this -> Madmin -> get_ongkir() -> result();
        $this -> template -> load('layout_admin', 'admin/ongkir/index',$data);
    }

    public function add() {
        $data['kota'] = $this -> Mcrud -> get_all_data('tbl_kota') -> result();
        $data['kurir'] = $this -> Mcrud -> get_all_data('tbl_kurir') -> result();
        $this -> template -> load('layout_admin','admin/ongkir/form_add', $data);
    }

    public function save() {
        $kurir = $this -> input -> POST('kurir');
        $asal = $this -> input -> POST('asal');
        $tujuan = $this -> input -> POST('tujuan');   
      
        if($asal == $tujuan){
            $this -> session -> set_flashdata('pesan','Data Kota Asal dan Tujuan Tidak boleh sama !! ');
            redirect('ongkir');
        } else {
            $this -> load -> model("Madmin");
            $count_duplikat_ongkir = $this -> Madmin -> cek_duplikat_ongkir($asal, $tujuan, $kurir) -> num_rows();
            if ($count_duplikat_ongkir > 0 ){
                $this -> session -> set_flashdata('pesan','Data Ongkir sudah tersedia');
                redirect('ongkir/add');
            } else {
                $biaya = $this -> input -> POST('biaya');
                $dataInsert = array('idKurir' => $kurir, 
                            'idKotaAsal' => $asal, 
                            'idKotaTujuan' => $tujuan,
                            'biaya' => $biaya);
                            $this -> Mcrud -> insert('tbl_biaya_kirim', $dataInsert);
                            $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan.'); 
                            redirect('ongkir');
            }
        }
        
    }

    public function getid($id) {
        $dataWhere = array('idBiayaKirim' => $id);
        $data['ongkir'] = $this -> Mcrud ->  get_by_id('tbl_biaya_kirim', $dataWhere) -> row_object();
        $data['kurir'] = $this -> Mcrud ->  get_all_data('tbl_kurir', $dataWhere) -> result();
        $data['kota'] = $this -> Mcrud ->  get_all_data('tbl_kota', $dataWhere) -> result();
        $this -> template -> load('layout_admin', 'admin/ongkir/form_edit', $data);
    }

    public function edit() {
        $id = $this -> input -> POST('id');
        $kurir = $this -> input -> POST('kurir');
        $asal = $this -> input -> POST('asal');
        $tujuan = $this -> input -> POST('tujuan');
        $biaya = $this -> input -> POST('biaya');

        $dataUpdate = 
        array('idKurir' => $kurir, 
        'idKotaAsal' => $asal, 
        'idKotaTujuan' => $tujuan,
         'biaya' => $biaya);
        $this -> Mcrud -> update('tbl_biaya_kirim', $dataUpdate, 'idBiayaKirim', $id);
        $this->session->set_flashdata('pesan','Data berhasil di ubah.'); 
        redirect('ongkir');
    }
 
    public function hapus($id) {
        $where = array('idBiayaKirim' => $id);
        $this -> Mcrud -> hapus_data($where, 'tbl_biaya_kirim');
        $this->session->set_flashdata('pesan','Data berhasil di hapus !! '); 
        redirect('ongkir');
    }

}




?>