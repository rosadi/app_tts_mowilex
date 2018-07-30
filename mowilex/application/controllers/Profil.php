<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('m_admin');
        $this->load->model('m_profil');

        if ( $this->session->userdata('status') != 'login' ) {
            # code...
            redirect(base_url());
        }
    }


    public function index(){
        $data['data_profil'] = $this->m_profil->get_data();

        $this->load->view('themes/header');
        $this->load->view('v_profil.php', $data);
        $this->load->view('themes/footer');
        
    }


}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */