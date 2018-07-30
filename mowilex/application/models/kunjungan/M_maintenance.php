<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_maintenance extends CI_Model {


    public function get_maintenance(){
        $tanggal = date('Y-m-d');
        $query = $this->db->query("SELECT  tb_tk.nama_toko, tb_mt.id_maintenance, kode_toko, tgl_kunjungan, dispanser_ket, mixer_ket, komputer_ket, perlengkapan, catatan
            FROM tbl_toko tb_tk
            JOIN tbl_maintenance tb_mt USING (kode_toko) WHERE tgl_kunjungan = '$tanggal'");
        return $query->result_array();
    }

    public function input_kunjungan(){

        $data = array(
                    'kode_toko'     => htmlspecialchars($this->input->POST('kode_toko')),
                    'tgl_kunjungan' => htmlspecialchars($this->input->POST('tgl_kunjungan')),
                    'dispanser_ket' => htmlspecialchars($this->input->POST('dispanser_ket')),
                    'mixer_ket'     => htmlspecialchars($this->input->POST('mixer_ket')),
                    'komputer_ket'  => htmlspecialchars($this->input->POST('komputer_ket')),
                    'perlengkapan'  => htmlspecialchars($this->input->POST('perlengkapan')),
                    'catatan'       => htmlspecialchars($this->input->POST('catatan'))
                    );
        return $this->db->insert('tbl_maintenance', $data);
    }

    public function get_date_maintenance(){
        $date_1 = $this->input->POST('date_1');
        $date_2 = $this->input->POST('date_2');

        $query = $this->db->query("SELECT tb_mt.kode_toko, tb_tk.nama_toko, tgl_kunjungan, dispanser_ket, mixer_ket, komputer_ket, perlengkapan, catatan
            FROM tbl_maintenance tb_mt
            JOIN tbl_toko tb_tk USING(kode_toko) WHERE (tgl_kunjungan BETWEEN '$date_1' AND '$date_2')");

        return $query->result_array();
    }

}

/* End of file m_maintenance.php */
/* Location: ./application/models/m_kunjungan/m_maintenance.php */