<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }

    public function index(){
        $this->load->view('v_login');
    }

    public function proses_login(){
        $username = $this->input->POST('username');
        $password = $this->input->POST('password');

        $where = array(
                        'username' => $username,
                        'password' => md5($password)
                    );
        $cek = $this->m_login->get_login('tbl_user', $where)->num_rows();

        if ( $cek > 0 ) {
            # code...

            $data_session = array(
                                'username' => $username,
                                'status' => 'login'
                                );

            $this->session->set_userdata($data_session);
            redirect(base_url('admin'));
            #echo "berhasil login";
        }else{

            $this->session->set_flashdata('pesan', 'Username dan password salah!');
            redirect(base_url());
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */