<?php

class Order_jilid extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_role_id') != '3') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            redirect('auth/login');
        }
    }

    public function index(){
        $this->load->view('users/add_order_jilid');
    }

    public function add_order_jilid(){
        $ukuran_kertas          = $this->input->post('ukuran_kertas');
        $warna_kamb            = $this->input->post('warna_kamb');
        $juml_rangkap           = $this->input->post('juml_rangkap');
        $no_telp                = $this->input->post('no_telp');
        $alamat                 = $this->input->post('alamat');
        $file_jilid             = $_FILES['file_jilid']['name'];
        $total_belanja          = $this->input->post('total_belanja');

        if ($file_jilid ='') {} else {
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'doc|docx|pdf|jpg|png|jpg|jpeg';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file_jilid')){
                echo "File gagal diupload!";
            } else {
                $file_jilid = $this->upload->data('file_name');
            }
        }
        
        $data = array (
            'ukuran_kertas'         => $ukuran_kertas,
            'warna_kamb'            => $warna_kamb,
            'juml_rangkap'          => $juml_rangkap,
            'no_telp'               => $no_telp,
            'alamat'                => $alamat,
            'file_jilid'            => $file_jilid,
            'total_belanja'         => $total_belanja
        );
    
        $this->model_order_jilid->add_order_jilid($data, 'jilid');
        redirect('users/metode_pembayaran/index');
    }
}