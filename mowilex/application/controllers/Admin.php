<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('m_admin');

        if ( $this->session->userdata('status') != 'login' ) {
            # code...
            redirect(base_url());
        }
    }

    public function index(){
        $this->load->view('themes/header');
        $this->load->view('v_admin');
        $this->load->view('themes/footer');
        
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */