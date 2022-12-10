<?php

Class Model_bukti_pembayaran extends CI_Model {
    
    public function tampil_data(){
        return $this->db->get('bukti_pembayaran');
    }
}