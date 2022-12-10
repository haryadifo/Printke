<?php

class Order_scan extends CI_Controller {
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
        $data['order_scan'] = $this->model_order_scan->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/manage_order_scan',$data);
        $this->load->view('templates_admin/footer');
    }

    public function add_order_scan(){
        $file_scan            = $_FILES['file_scan']['name'];
        $jml_scan            = $this->input->post('jml_scan');
        $berat_scan          = $this->input->post('berat_scan');
        $ukuran_scan         = $this->input->post('ukuran_scan');
        $no_telpon           = $this->input->post('no_telpon');
        $alamat              = $this->input->post('alamat');
        $total_belanja       = $this->input->post('total_belanja');

        if ($file_scan ='') {} else {
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'doc|docx|pdf|jpg|jpeg|png';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file_scan')){
                echo "File gagal diupload!";
            } else {
                $file_scan = $this->upload->data('file_name');
            }
        }

        $data = array (
            'file_scan'         => $file_scan,
            'jml_scan'          => $jml_scan,
            'berat_scan'        => $berat_scan,
            'ukuran_scan'       => $ukuran_scan,
            'no_telpon'         => $no_telpon,
            'alamat'            => $alamat,
            'total_belanja'     => $total_belanja
        );
    
        $this->model_order_scan->add_order_scan($data, 'scan');
        redirect('admin/order_scan/index');
    }

    public function hapus_order_scan ($id_order_scan) {
        $where = array('id_order_scan' => $id_order_scan);
        $this->model_order_scan->delete_order_scan($where, 'scan');
        redirect('admin/order_scan/index');
    }
}