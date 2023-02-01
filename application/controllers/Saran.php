<?php 
 
 class Saran extends CI_Controller{  
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('Mcrud'); 
       
    }   
     
    private function cek_login(){ 
        if(empty($this->session->userdata('userName'))){ 
			redirect('adminpanel/dashboard');
		 } 
    }
 
     public function index(){  
        $this->template->load('layout_admin','admin/saran/saran_add');
     }  
      
     public function add(){ 
        $ratingslider = $this->input->post('rating-slider');
        $penilaian = $this->input->post('penilaian');  
        $keterangan = $this->input->post('keterangan'); 
        $rw = $this->input->post('rw');
        $dataInsert = array('rating-slider'=>$ratingslider, 'penilaian'=>$penilaian , 'keterangan'=>$keterangan, 'rw'=>$rw); 
        $this->Mcrud->insert('tbl_saran', $dataInsert); 
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('pesan','Saran Berhasil diKirim');    
        };
        redirect('saran');  

     }

}
