<?php

Class Model_order_scan extends CI_Model {
    
    public function tampil_data(){
        return $this->db->get('scan');
    }

    public function add_order_scan($data,$table){
        $this->db->insert($table,$data);
    }

    public function delete_order_scan($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
