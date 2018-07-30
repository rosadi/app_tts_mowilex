<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_asset extends CI_Controller {

    # __construct
    public function __construct(){
        parent:: __construct();
        
        $this->load->model('m_asset');

        if ( $this->session->userdata('status') != 'login' ) {
            # code...
            redirect(base_url());
        }
    }    


    # menampilkan data seluruh toko untuk select data
    public function get_toko(){
        $this->db->from('tbl_toko');
        $this->db->order_by('tgl_installasi', 'ASC');
        $query = $this->db->get();

        return $query->result_array();
    }

    # menampilkan halaman dashboar index nanti bakal join sama tbl_toko dan tbl_mesin
    public function index(){
        $data['data_mesin'] = $this->m_asset->get_mesin();

        $this->load->view('themes/header');
        $this->load->view('data_asset/v_dashboard_data_asset', $data);
        $this->load->view('themes/footer');
    }

    public function detail_asset($id_mesin = NULL){
        $data['detail_asset'] = $this->m_asset->get_mesin_id($id_mesin);
        $this->load->view('themes/header');
        $this->load->view('data_asset/v_detail_data_asset', $data);
        $this->load->view('themes/footer');
    }

    public function cari_asset(){
        $data['cari_data_asset'] = $this->m_asset->search_mesin();

        $this->load->view('themes/header');
        $this->load->view('data_asset/v_cari_asset', $data);
        $this->load->view('themes/footer');
    }

    # ==============================================================================================

    # menampilkan seluruh data toko
    public function data_toko(){
        $data['data_toko'] = $this->m_asset->get_toko();

        $this->load->view('themes/header');
        $this->load->view('data_toko/v_toko', $data);
        $this->load->view('themes/footer');
        
    }

    # meng-input data toko
    public function tambah_toko(){
        $this->form_validation->set_rules('kode_toko', 'Kode Toko', 'required');
        $this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required');
        $this->form_validation->set_rules('tgl_installasi', "Tanggal Installasi", 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # code...
            $this->load->view('themes/header');
            $this->load->view('data_toko/v_toko_add');
            $this->load->view('themes/footer');
        }else{
            $this->session->set_flashdata('berhasil_input_toko', 'Data toko berhasil di input!');
            $this->m_asset->set_toko();
            redirect(base_url('asset/data_asset/data_toko'));
        }
    }

    # menampilkan data toko berdasrakan kode_toko. 
    # method / perintah sebelum di edit
    public function edit_toko($kode_toko = NULL){
        
        if ( $kode_toko == NULL ) {
            # code...
            redirect(base_url('asset/data_asset/data_toko'));
            
        }else{

            #$this->form_validation->set_rules('kode_toko', 'Kode Toko', 'required');
            $this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required');
            $this->form_validation->set_rules('tgl_installasi', 'Tanggal Installasi', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('kota', 'Kota', 'required');

            if ( $this->form_validation->run() === FALSE ) {
            # code...
                $this->load->view('themes/header');
                $data['data_by_kode'] = $this->m_asset->toko_by_kode($kode_toko);
                $this->load->view('data_toko/v_toko_edit', $data);
                $this->load->view('themes/footer');
            }else{
                $this->m_asset->update_toko($kode_toko);
                $this->session->set_flashdata('berhasil_update_toko', 'Toko berhasil di update');
                redirect(base_url('asset/data_asset/data_toko'));
            }
        }
    }

    # menghapus data toko berdasrkan kode_toko
    public function delete_toko($kode_toko = NULL){
        if ( $kode_toko == NULL ) {
            # code...
            redirect(base_url('asset/data_asset/data_toko'));
            
        }else{
            $this->session->set_flashdata('berhasil_delete_toko', 'Data toko berhasil di delete!');
            $this->m_asset->del_toko($kode_toko);
            redirect(base_url('asset/data_asset/data_toko'));
        }
    }

    # untuk mencari data nama toko, dan alamat toko
    public function cari_toko(){
    
        $data['data_cari_toko'] = $this->m_asset->search_toko();
        $this->load->view('themes/header');
        $this->load->view('data_toko/v_toko_cari', $data);
        $this->load->view('themes/footer');
    }
# ==================================================================================================
# data mesin
# ==================================================================================================
    public function data_mesin(){

        $data['data_mesin'] = $this->m_asset->get_mesin();

        $this->load->view('themes/header');
        $this->load->view('data_mesin/v_mesin', $data);
        $this->load->view('themes/footer');
    }

    public function detail_mesin($id_mesin = NULL){
        $data['data_detail_mesin'] = $this->m_asset->get_mesin_id($id_mesin);
        $this->load->view('themes/header');
        $this->load->view('data_mesin/v_mesin_detail', $data);
        $this->load->view('themes/footer');
    }

    public function tambah_mesin(){
        
        $this->form_validation->set_rules('dispanser_tipe', 'Dispanser Tipe', 'required');
        $this->form_validation->set_rules('dispanser_sn', 'Dispanser SN', 'required');
        $this->form_validation->set_rules('mixer_tipe', 'Mixer Tipe', 'required');
        $this->form_validation->set_rules('mixer_sn', 'Mixer SN', 'required');
        $this->form_validation->set_rules('cpu_tipe', 'CPU Tipe', 'required');
        $this->form_validation->set_rules('cpu_sn', 'CPU SN', 'required');
        $this->form_validation->set_rules('monitor_tipe', 'Monitor Tipe', 'required');
        $this->form_validation->set_rules('monitor_sn', 'Monitor SN', 'required');
        $this->form_validation->set_rules('ups_tipe', 'UPS Tipe', 'required');
        $this->form_validation->set_rules('ups_sn', 'UPS SN', 'required');
        $this->form_validation->set_rules('stabilizer_tipe', 'Stabilizer Tipe', 'required');
        $this->form_validation->set_rules('stabilizer_sn', 'Stabilizer SN', 'required');
        $this->form_validation->set_rules('printer_tipe', 'Printer Tipe', 'required');
        $this->form_validation->set_rules('printer_sn', 'Printer SN', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # code...
            # kode toko_mesin ini menampilkan data yang belum punya mesin
            $data['toko_mesin'] = $this->m_asset->get_toko_mesin();
            $this->load->view('themes/header');
            $this->load->view('data_mesin/v_mesin_add', $data);
            $this->load->view('themes/footer');
        }else{
                $this->session->set_flashdata('berhasil_input_mesin', 'Mesin berhasil di input');
                $this->m_asset->set_mesin();
                redirect('asset/data_asset/data_mesin');
        }
    }

    public function delete_mesin($id_mesin = NULL){
        $this->session->set_flashdata('berhasil_delete_mesin', 'Mesin berhasil di delete!');
        $this->m_asset->delete($id_mesin);
        redirect('asset/data_asset/data_mesin');
    }

    public function update_mesin($id_mesin = NULL){
        if ( $id_mesin == NULL ) {
            # code...
            redirect('data_asset/data_mesin');
        }else{
            $this->load->view('themes/header');
            $this->load->view('data_mesin/v_mesin_edit');
            $this->load->view('themes/footer');
        }
    }

}

/* End of file Data_asset.php */
/* Location: ./application/controllers/Data_asset.php */