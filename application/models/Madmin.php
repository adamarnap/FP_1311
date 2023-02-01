<?php 

class Madmin extends CI_Model {

    public function get_ongkir(){
        $q = $this -> db -> query("SELECT b.idBiayaKirim, k.namaKota AS asal, j.namaKota
        AS tujuan, b.biaya, r.namaKurir FROM tbl_biaya_kirim b JOIN tbl_kota k ON b.idKotaAsal = k.idKota JOIN tbl_kota j ON b.idKotaTujuan = j.idKota JOIN tbl_kurir r ON b.idKurir = r.idKurir");
        return $q;
    }

    public function get_member(){
        $q = $this -> db -> query("SELECT tbl_member.idKonsumen, tbl_member.username, tbl_member.password, tbl_member.namaKonsumen, tbl_member.alamat, tbl_kota.namaKota, tbl_member.email, tbl_member.tlpn, tbl_member.statusAktif
        FROM tbl_member JOIN tbl_kota
        ON tbl_kota.idKota = tbl_member.idKota
        ");
        return $q;
    }

    public function get_toko(){
        $q = $this -> db -> query(" SELECT tbl_toko.idToko, tbl_member.namaKonsumen, tbl_toko.namaToko, tbl_toko.logo, tbl_toko.deskripsi, tbl_toko.StatusAktif
        FROM tbl_toko JOIN tbl_member
        ON tbl_member.idKonsumen = tbl_toko.idKonsumen
        ");
        return $q;
    }

    public function get_level(){
        $q = $this -> db -> query("SELECT level FROM tbl_admin");
        return $q;
    }

    public function get_keranjang(){
        $q = $this -> db -> query("SELECT tbl_keranjang.idKeranjang, tbl_kategori.namaKat, tbl_keranjang.namaPembeli, tbl_keranjang.jumlahBarang, tbl_keranjang.totalHarga FROM tbl_keranjang JOIN tbl_kategori ON tbl_keranjang.idKategori = tbl_kategori.idKat");
        return $q;
    }


    public function cek_kota($id){
        $q = $this -> db -> query(" SELECT * FROM tbl_biaya_kirim WHERE idKotaAsal = '$id' OR idKotaTujuan = '$id'");
        return $q;
    }

    public function cek_duplikat_ongkir($asal, $tujuan, $kurir){
        $q = $this -> db -> query("SELECT * FROM tbl_biaya_kirim WHERE idKotaAsal = '$asal' AND idKotaTujuan = '$tujuan' AND idKurir = '$kurir'  ");
        return $q;
    }

    public function cek_kurir($id){ 
        $q = $this->db->query("SELECT * FROM tbl_biaya_kirim where idKurir='$id' OR idKurir='$id'"); 
        return $q;
    } 

    public function get_ongkir_edit(){ 
        $q = $this->db->query("SELECT r.namaKurir, k.namaKota AS asal, t.namaKota AS tujuan, b.biaya  
        FROM tbl_biaya_kirim b 
        JOIN tbl_kota k ON b.idKotaAsal=k.idKota JOIN tbl_kota t ON b.idKotaTujuan=t.idKota JOIN tbl_kurir r ON b.idKurir=r.idKurir"); 
        return $q;
    }


}

?>