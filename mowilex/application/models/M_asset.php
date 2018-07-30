<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_asset extends CI_Model {

    # tampil toko
    public function get_toko(){
        $this->db->order_by('tgl_installasi', 'ASC');
        $query = $this->db->get('tbl_toko');
        return $query->result_array();
    }

    # input data toko
    public function set_toko(){

        $data = array(
                    'kode_toko'      => htmlspecialchars($this->input->POST('kode_toko')),
                    'nama_toko'      => htmlspecialchars($this->input->POST('nama_toko')),
                    'tgl_installasi' => htmlspecialchars($this->input->POST('tgl_installasi')),
                    'alamat'         => htmlspecialchars($this->input->POST('alamat')),
                    'kota'           => htmlspecialchars($this->input->POST('kota'))
                    );

        $query = $this->db->insert('tbl_toko', $data);

    }

    # delete data toko
    public function del_toko($kode_toko){
        return $this->db->delete('tbl_toko', array('kode_toko' => $kode_toko));
    }

    # tampil sebelum di edit
    public function toko_by_kode($kode_toko = FALSE){
        $query = $this->db->get_where('tbl_toko', array('kode_toko' => $kode_toko));
        return $query->row_array();
    }

    # update data toko
    public function update_toko($kode_toko){

        $data = array(
                   'nama_toko'      => htmlspecialchars($this->input->POST('nama_toko')),
                    'tgl_installasi' => htmlspecialchars($this->input->POST('tgl_installasi')),
                    'alamat'         => htmlspecialchars($this->input->POST('alamat')),
                    'kota'           => htmlspecialchars($this->input->POST('kota'))
                    );

        $this->db->where('kode_toko', $kode_toko);
        $query = $this->db->update('tbl_toko', $data);

    }
    # mencari data toko
    public function search_toko(){

        $cari = $this->input->POST('cari', TRUE);
        $data = $this->db->query("SELECT * FROM tbl_toko WHERE nama_toko LIKE '%$cari%' OR tgl_installasi LIKE '%$cari%' OR kota LIKE '%$cari%'");
        return $data->result();
    }
# ==================================================================================================
# data mesin
# ==================================================================================================
    
    # menampilkan semua data mesin yang ter-install di toko
    public function get_mesin(){
        $query = $this->db->query("SELECT tb_tk.kode_toko, nama_toko, alamat, tgl_installasi,
         tb_ms.id_mesin, dispanser_tipe, mixer_tipe
         FROM tbl_toko tb_tk
         JOIN tbl_mesin tb_ms USING (kode_toko)");
        return $query->result_array();
    }

    # detial id mesin
    public function get_mesin_id($id_mesin){
        $query = $this->db->query("SELECT tb_tk.kode_toko, nama_toko, alamat, tgl_installasi,
                                     tb_ms.id_mesin, dispanser_tipe, dispanser_sn, mixer_tipe, 
                                     mixer_sn, cpu_tipe, cpu_sn, monitor_tipe, monitor_sn, ups_tipe, 
                                     ups_sn, stabilizer_tipe, stabilizer_sn, printer_tipe, printer_sn
                                     FROM tbl_toko tb_tk
                                     JOIN tbl_mesin tb_ms USING (kode_toko) WHERE id_mesin = '$id_mesin'");
        return $query->row_array();
    }

    public function get_toko_mesin(){
        $query = $this->db->query("SELECT * FROM tbl_toko WHERE NOT EXISTS (SELECT * FROM tbl_mesin WHERE tbl_toko.kode_toko = tbl_mesin.kode_toko) ORDER BY tgl_installasi ASC");
        return $query->result_array();
    }

    public function delete($id_mesin){
        return $query = $this->db->delete('tbl_mesin', array('id_mesin' => $id_mesin));
    }

    public function set_mesin(){

        $data = array(
                    'kode_toko'       => htmlspecialchars($this->input->POST('kode_toko')),
                    'dispanser_tipe'  => htmlspecialchars($this->input->POST('dispanser_tipe')),
                    'dispanser_sn'    => htmlspecialchars($this->input->POST('dispanser_sn')),
                    'mixer_tipe'      => htmlspecialchars($this->input->POST('mixer_tipe')),
                    'mixer_sn'        => htmlspecialchars($this->input->POST('mixer_sn')),
                    'cpu_tipe'        => htmlspecialchars($this->input->POST('cpu_tipe')),
                    'cpu_sn'          => htmlspecialchars($this->input->POST('cpu_sn')),
                    'monitor_tipe'    => htmlspecialchars($this->input->POST('monitor_tipe')),
                    'monitor_sn'      => htmlspecialchars($this->input->POST('monitor_sn')),
                    'ups_tipe'        => htmlspecialchars($this->input->POST('ups_tipe')),
                    'ups_sn'          => htmlspecialchars($this->input->POST('ups_sn')),
                    'stabilizer_tipe' => htmlspecialchars($this->input->POST('stabilizer_tipe')),
                    'stabilizer_sn'   => htmlspecialchars($this->input->POST('stabilizer_sn')),
                    'printer_tipe'    => htmlspecialchars($this->input->POST('printer_tipe')),
                    'printer_sn'      => htmlspecialchars($this->input->POST('printer_sn'))

                    );

        return $this->db->insert('tbl_mesin', $data);
    }

    # mencari data mesin
    public function search_mesin(){

        $cari = $this->input->POST('cari', TRUE);
        $data = $this->db->query("SELECT tb_tk.kode_toko, nama_toko, alamat, tgl_installasi,
         tb_ms.id_mesin, dispanser_tipe, dispanser_sn, mixer_tipe, mixer_sn, cpu_tipe, cpu_sn, monitor_tipe, monitor_sn, ups_tipe, ups_sn, stabilizer_tipe, stabilizer_sn, printer_tipe, printer_sn
         FROM tbl_toko tb_tk
         JOIN tbl_mesin tb_ms USING (kode_toko) WHERE nama_toko LIKE '%$cari%' OR tgl_installasi LIKE '%$cari%' OR alamat LIKE '%$cari%' OR dispanser_tipe LIKE '%$cari%' OR mixer_tipe LIKE '%$cari%' OR cpu_tipe LIKE '%$cari%' OR monitor_tipe LIKE '%$cari%' OR ups_tipe LIKE '%$cari%' OR stabilizer_tipe OR printer_tipe LIKE '%$cari%' ");

        return $data->result();
    }

}

/* End of file M_asset.php */
/* Location: ./application/models/M_asset.php */