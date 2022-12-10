<?php

class Add_order_print extends CI_Controller {
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

    public function index() {
        $this->load->view('templates_super_admin/header');
        $this->load->view('templates_super_admin/sidebar');
        $this->load->view('super_admin/add_order_print');
        $this->load->view('templates_super_admin/footer');
    }
}