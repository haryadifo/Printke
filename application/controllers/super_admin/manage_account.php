<?php

class Manage_account extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            redirect('auth/login');
        }
    }

    public function index() 
    {
        $data['manage_account'] = $this->model_manage_account->tampil_data()->result();
        $this->load->view('templates_super_admin/header');
        $this->load->view('templates_super_admin/sidebar');
        $this->load->view('super_admin/manage_account',$data);
        $this->load->view('templates_super_admin/footer');
    }
    public function add_admin(){
        $user_nama              = $this->input->post('user_nama');
        $username               = $this->input->post('username');
        $user_password          = $this->input->post('user_password');
        $user_role_id           = $this->input->post('user_role_id');

        $data = array (
            'user_nama'             => $user_nama,
            'username'              => $username,
            'user_password'         => $user_password,
            'user_role_id'          => $user_role_id
        );
    
        $this->model_manage_account->add_admin($data, 'user');
        redirect('super_admin/manage_account/index');
    }

    public function edit_account($id_user)
    {
        $where = array('id_user' => $id_user);
        $data['manage_account'] = $this->model_manage_account->edit_account($where, 'user')->result();
        $this->load->view('templates_super_admin/header');
        $this->load->view('templates_super_admin/sidebar');
        $this->load->view('super_admin/edit_admin', $data);
        $this->load->view('templates_super_admin/footer');
    }

    public function update_account(){
        $id_user                = $this->input->post('id_user');
        $user_nama              = $this->input->post('user_nama');
        $username               = $this->input->post('username');
        $user_password          = $this->input->post('user_password');
        $user_role_id           = $this->input->post('user_role_id');

        $data = array (
            'user_nama'             => $user_nama,
            'username'              => $username,
            'user_password'         => $user_password,
            'user_role_id'          => 2
        );

        $where = array('id_user' => $id_user);

        $this->model_manage_account->update_account($where, $data, 'user');
        redirect('super_admin/manage_account/index');
    }

    public function hapus_admin ($id_user) {
        $where = array('id_user' => $id_user);
        $this->model_manage_account->delete_admin($where, 'user');
        redirect('super_admin/manage_account/index');
    }
}