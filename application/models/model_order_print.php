<?php

Class Model_order_print extends CI_Model {
    
    public function tampil_data(){
        return $this->db->get('print');
    }

    public function add_order_print($data,$table){
        $this->db->insert($table,$data);
    }

    public function delete_order_print($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
