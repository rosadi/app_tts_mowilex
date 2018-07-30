<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kunjungan extends CI_Controller {

    public function __construct(){
        parent:: __construct();

        $this->load->model('kunjungan/m_maintenance');
        $this->load->model('m_asset');

        if ( $this->session->userdata('status') != 'login' ) {
            # code...
            redirect(base_url());
        }
    }

    public function index(){
        $data['data_kunjungan'] = $this->m_maintenance->get_maintenance();

        $this->load->view('themes/header');
        $this->load->view('data_kunjungan/v_kunjungan', $data);
        $this->load->view('themes/footer');
        
    }

    public function add_maintenance(){

        $this->form_validation->set_rules('kode_toko', 'Kode Toko', 'required');
        $this->form_validation->set_rules('tgl_kunjungan', 'Tanggal Kunjungan', 'required');
        $this->form_validation->set_rules('dispanser_ket', 'Keterangan Dispanser', 'required');
        $this->form_validation->set_rules('mixer_ket', 'Keterangan Mixer', 'required');
        $this->form_validation->set_rules('komputer_ket', 'Keterangan Komputer', 'required');
        $this->form_validation->set_rules('perlengkapan', 'Perlengkapan', 'required');
        $this->form_validation->set_rules('catatan', 'Catatan', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # code...
            $data['list_toko'] = $this->m_asset->get_toko();
            $this->load->view('themes/header');
            $this->load->view('data_kunjungan/v_kunjungan_add', $data);
            $this->load->view('themes/footer');
        }else{
            $this->m_maintenance->input_kunjungan();
            redirect('kunjungan/data_kunjungan');
        }
    }

    public function report_maintenance(){
        $this->form_validation->set_rules('date_1', '<u>Tanggal Pertama</u>', 'required');
        $this->form_validation->set_rules('date_2', '<u>Tangga Kedua</u>', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # code...
            $data['select_data'] = $this->m_maintenance->get_date_maintenance();

            $this->load->view('themes/header');
            $this->load->view('data_kunjungan/v_kunjungan_report', $data);
            $this->load->view('themes/footer');
        }else{
            $data['select_data'] = $this->m_maintenance->get_date_maintenance();
            $this->load->view('themes/header');
            $this->load->view('data_kunjungan/v_kunjungan_report', $data);
            $this->load->view('themes/footer');
        }

    }

}

/* End of file Data_kunjungan.php */
/* Location: ./application/controllers/Kunjungan/Data_kunjungan.php */