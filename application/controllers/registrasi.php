<?php

class Registrasi extends CI_Controller 
{
    public function index() 
    {
        $this->form_validation->set_rules('user_nama','user_nama','required',['required' => 'Nama wajib diisi!']);
        $this->form_validation->set_rules('username','username','required',['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('user_password','user_password','required',['required' => 'Password wajib diisi!']);

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates_all/header');
            $this->load->view('registrasi');
            $this->load->view('templates_all/footer');
        } else {
            $data = array (
                'id_user'           => '',
                'user_nama'         => $this->input->post('user_nama'),
                'username'          => $this->input->post('username'),
                'user_password'     => $this->input->post('user_password'),
                'user_role_id'      => 3
            );

            $this->db->insert('user',$data);
            redirect('auth/login');
        }
    
        
    }
}