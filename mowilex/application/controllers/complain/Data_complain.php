<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_complain extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('m_complain');
        $this->load->model('m_asset');

        if ( $this->session->userdata('status') != 'login' ) {
            # code...
            redirect(base_url());
        }
    }

    # menampilkan data dari awal bulan sampai akhir bulan
    public function index(){

        $data['data_complain'] = $this->m_complain->get_complain_permonth();

        $this->load->view('themes/header');
        $this->load->view('data_complain/v_complain', $data);
        $this->load->view('themes/footer');
        
    }

    public function detail_complain($id_complain = NULL){
        if ( $id_complain == NULL ) {
            # code...
            redirect('complain/data_complain');
        }else{
            $data['detail_complain'] = $this->m_complain->get_detail_complain($id_complain);
            $this->load->view('themes/header');
            $this->load->view('data_complain/v_detail_complain', $data);
            $this->load->view('themes/footer');
        }
    }

    public function input_complain(){
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

        if ( $this->form_validation->run() === FALSE ) {
            # code...
            $data['list_toko']   = $this->m_asset->get_toko();
            $data['no_complain'] = $this->m_complain->no_complain();
            $data['id_complain'] = $this->m_complain->id_complain();

            $this->load->view('themes/header');
            $this->load->view('data_complain/v_complain_add', $data);
            $this->load->view('themes/footer');
        }else{
            $this->session->set_flashdata('berhasil_input_comp', 'Complain berhasil di-input!');
            $this->m_complain->set_complain();
            redirect('complain/data_complain');
        }
    }

    public function edit_complain($id_complain = NULL){

        if ( $id_complain == NULL ) {
            # code...
            redirect(base_url('complain/data_complain'));
        }else{
            #$this->form_validation->set_rules('id_complain', 'ID Complain', 'required');
            #$this->form_validation->set_rules('no_complain', 'Nomor Complain', 'required');
            $this->form_validation->set_rules('tgl_complain', 'Tanggal Complain', 'required');
            $this->form_validation->set_rules('perihal', 'Perihal', 'required');
            $this->form_validation->set_rules('kode_toko'. 'Kode Toko', 'required');
            $this->form_validation->set_rules('produk', 'Produk', 'required');
            $this->form_validation->set_rules('batch', 'Batch', 'required');
            $this->form_validation->set_rules('masalah', 'Masalah', 'required');
            $this->form_validation->set_rules('verifikasi', 'Verfikasi', 'required');
            $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');

            if ( $this->form_validation->run() === FALSE ) {
        # code
                $data['list_toko'] = $this->m_asset->get_toko();
                $data['edit_comp'] = $this->m_complain->get_detail_complain($id_complain);

                $this->load->view('themes/header');   
                $this->load->view('data_complain/v_edit_complain', $data);
                $this->load->view('themes/footer');
            }else{
                $this->session->set_flashdata('berhasil_update_comp', 'Complain berhasil update!');
                $this->m_complain->update_complain($id_complain);
                redirect(base_url('complain/data_complain'));
            }
        }        
    }

    # menampilkan data per tanggal yang kita pilih
    public function report_complain(){

        $this->form_validation->set_rules('date_1', '<u>Tanggal Pertama</u>', 'required');
        $this->form_validation->set_rules('date_2', '<u>Tangga Kedua</u>', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # code...
            $data['data_complain'] = $this->m_complain->get_reprot_perdate();

            $this->load->view('themes/header');
            $this->load->view('data_complain/v_complain_report', $data);
            $this->load->view('themes/footer');
        }else{
            $data['data_complain'] = $this->m_complain->get_reprot_perdate();

            $this->load->view('themes/header');
            $this->load->view('data_complain/v_complain_report', $data);
            $this->load->view('themes/footer');
        }



    }

}

/* End of file Data_complain.php */
/* Location: ./application/controllers/complain/Data_complain.php */