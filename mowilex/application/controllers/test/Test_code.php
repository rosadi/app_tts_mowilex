<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_code extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('m_asset');
        $this->load->model('m_test');

        if ( $this->session->userdata('status') != 'login' ) {
            # code...
            redirect(base_url());
        }
    }

    public function index(){
        $this->form_validation->set_rules('id_complain', 'ID Complain', 'required');
        $this->form_validation->set_rules('no_complain', 'Nomor Complain', 'required');
        $this->form_validation->set_rules('tgl_complain', 'Tanggal Complain', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        $this->form_validation->set_rules('kode_toko'. 'Kode Toko', 'required');
        $this->form_validation->set_rules('produk', 'Produk', 'required');
        $this->form_validation->set_rules('batch', 'Batch', 'required');
        $this->form_validation->set_rules('masalah', 'Masalah', 'required');
        $this->form_validation->set_rules('verifikasi', 'Verfikasi', 'required');
        $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ( $this->form_validation->run() === FALSE) {
            # code...
            $datatoko['list_toko'] = $this->m_asset->get_toko();
            $datatoko['no_complain'] = $this->m_test->no_complain();
            $datatoko['id_complain'] = $this->m_test->id_complain();
            $this->load->view('test_page/v_kode_complain', $datatoko);
        }else{
            $this->m_test->input_complain();
            redirect('test/test_code');
        }

        
    }

}

/* End of file Test_code.php */
/* Location: ./application/controllers/test/Test_code.php */