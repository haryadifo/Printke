<?php

class Order_print extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_role_id') != '2') {
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
        $data['order_print'] = $this->model_order_print->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/manage_order_print',$data);
        $this->load->view('templates_admin/footer');
    }

    public function add_order_print(){
        $file_print             = $_FILES['file_print']['file_name'];
        $jml_rangkap            = $this->input->post('jml_rangkap');
        $berat_kertas           = $this->input->post('berat_kertas');
        $ukuran_kertas          = $this->input->post('ukuran_kertas');
        $jenis_tinta            = $this->input->post('jenis_tinta');
        $no_telp                = $this->input->post('no_telp');
        $alamat                 = $this->input->post('alamat');
        $total_belanja          = $this->input->post('total_belanja');

        if ($file_print ='') {} else {
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'doc|docx|pdf|jpg|png';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file_print')){
                echo "File gagal diupload!";
            } else {
                $file_print = $this->upload->data('file_name');
            }
        }

        $data = array (
            'file_print'        => $file_print,
            'jml_rangkap'       => $jml_rangkap,
            'berat_kertas'      => $berat_kertas,
            'ukuran_kertas'     => $ukuran_kertas,
            'jenis_tinta'       => $jenis_tinta,
            'no_telp'           => $no_telp,
            'alamat'            => $alamat,
            'total_belanja'     => $total_belanja
        );
    
        $this->model_order_print->add_order_print($data, 'print');
        redirect('admin/order_print/index');
    }

    public function hapus_order_print ($id_order_print) {
        $where = array('id_order_print' => $id_order_print);
        $this->model_order_print->delete_order_print($where, 'print');
        redirect('admin/order_print/index');
    }
}