<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('user_password', 'user_password', 'required', ['required' => 'Password wajib diisi!']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_all/header');
            $this->load->view('form_login');
            $this->load->view('templates_all/footer');
        } else {
            $auth = $this->model_manage_account->cek_login();
            //tampilkan error jika username/password tidak diisi atau salah
            if ($auth == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('user_role_id', $auth->user_role_id);

                switch ($auth->user_role_id) {
                    case 1:
                        redirect('super_admin/dashboard_admin');
                        break;
                    case 2:
                        redirect('admin/dashboard_admin');
                        break;
                    case 3:
                        redirect('users/dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
