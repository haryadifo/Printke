<?php

Class Model_order_jilid extends CI_Model {
    
    public function tampil_data(){
        return $this->db->get('jilid');
    }

    public function add_order_jilid($data,$table){
        $this->db->insert($table,$data);
    }
    
    public function delete_order_jilid($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
