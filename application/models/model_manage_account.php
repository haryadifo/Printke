<?php

Class Model_manage_account extends CI_Model {
    
    public function tampil_data(){
        return $this->db->get('user');
    }

    public function add_admin($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_account($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_account($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_admin($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cek_login()
    {
        $username = set_value('username');
        $user_password = set_value('user_password');

        $result = $this->db->where('username', $username)
                           ->where('user_password', $user_password)
                           ->limit(1)
                           ->get('user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
