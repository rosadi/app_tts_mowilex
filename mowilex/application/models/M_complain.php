<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_complain extends CI_Model {

    # saya ingin menampilkan data per-bulan
    public function get_complain_permonth(){
        $hari_ini = date("Y-m-d");
        $tgl_pertama = date('Y-m-01', strtotime($hari_ini));
        $tgl_terakhir = date('Y-m-t', strtotime($hari_ini));

        $query = $this->db->query("SELECT tb_cp.no_complain, tb_tk.nama_toko, tgl_complain, perihal, 
                                    produk, batch, masalah, verifikasi, kesimpulan, nama_lengkap, 
                                    id_complain
                                    FROM tbl_complain tb_cp
                                    JOIN tbl_user tb_us USING (username)
                                    JOIN tbl_toko tb_tk USING(kode_toko) 
                                    WHERE (tgl_complain BETWEEN '$tgl_pertama' AND '$tgl_terakhir')");

        return $query->result_array();
    }

    # menampilkan report per bulan
    public function get_reprot_perdate(){
        
        $date_1 = $this->input->POST('date_1');
        $date_2 = $this->input->POST('date_2');

        $query = $this->db->query("SELECT tb_cp.no_complain, tb_tk.nama_toko, tgl_complain, perihal, 
                                    produk, batch, masalah, verifikasi, kesimpulan, nama_lengkap, 
                                    id_complain
                                    FROM tbl_complain tb_cp
                                    JOIN tbl_user tb_us USING (username)
                                    JOIN tbl_toko tb_tk USING(kode_toko) 
                                    WHERE (tgl_complain BETWEEN '$date_1' AND '$date_2')");

        return $query->result_array();
    }

    # 1. menampilkan data detail complain
    # 2. menampilkan data sebelum di edit
    public function get_detail_complain($id_complain){
        $query = $this->db->query("SELECT tb_cp.no_complain, tb_tk.nama_toko, kode_toko, id_complain,
                                    tgl_complain, perihal, produk, batch, masalah, verifikasi, 
                                    kesimpulan, nama_lengkap
                                    FROM tbl_complain tb_cp
                                    JOIN tbl_user tb_us USING (username)
                                    JOIN tbl_toko tb_tk USING(kode_toko) WHERE id_complain = '$id_complain'");

        return $query->row_array();
    }

    # membuat id_complain sama dengan nomor_complain
    public function id_complain(){
        $query = $this->db->query('SELECT MAX(id_complain) AS MaxIdComp FROM tbl_complain');
        $data = $query->row_array(); 

        $idMaxComplain = $data['MaxIdComp'];

        $urut = (int) substr($idMaxComplain, 1, 4);
       
        $urut++;
        
        $newidMaxComplain = sprintf("%04s", $urut);
        return $newidMaxComplain;

    }

    # membuat nomor complain
    public function no_complain(){
        $query = $this->db->query('SELECT MAX(no_complain) AS MaxNoComp FROM tbl_complain');
        $data = $query->row_array(); 

        $noMaxComplain = $data['MaxNoComp'];

        $urut = (int) substr($noMaxComplain, 1, 4);
        $bln = date('m');
        $thn = date('Y');
        
        $urut++;
        
        $newNoMaxComplain = sprintf("%04s", $urut)."/COMP/BDG/".$bln."/".$thn;
        return $newNoMaxComplain;
    }

    public function set_complain(){
        $data = array(  
                         'id_complain'  => htmlspecialchars($this->input->POST('id_complain')),
                        'no_complain'  => htmlspecialchars($this->input->POST('no_complain')),
                        'tgl_complain' => htmlspecialchars($this->input->POST('tgl_complain')),
                        'perihal'      => htmlspecialchars($this->input->POST('perihal')),
                        'kode_toko'    => htmlspecialchars($this->input->POST('kode_toko')),
                        'produk'       => htmlspecialchars($this->input->POST('produk')),
                        'batch'        => htmlspecialchars($this->input->POST('batch')),
                        'masalah'      => htmlspecialchars($this->input->POST('masalah')),
                        'verifikasi'   => htmlspecialchars($this->input->POST('verifikasi')),
                        'kesimpulan'   => htmlspecialchars($this->input->POST('kesimpulan')),
                        'username'     => htmlspecialchars($this->input->POST('username'))
                     );
        return $this->db->insert('tbl_complain', $data);
    }

    # update data complain
    public function update_complain($id_complain){
        $data = array(  
                        'tgl_complain' => htmlspecialchars($this->input->POST('tgl_complain')),
                        'perihal'      => htmlspecialchars($this->input->POST('perihal')),
                        'kode_toko'    => htmlspecialchars($this->input->POST('kode_toko')),
                        'produk'       => htmlspecialchars($this->input->POST('produk')),
                        'batch'        => htmlspecialchars($this->input->POST('batch')),
                        'masalah'      => htmlspecialchars($this->input->POST('masalah')),
                        'verifikasi'   => htmlspecialchars($this->input->POST('verifikasi')),
                        'kesimpulan'   => htmlspecialchars($this->input->POST('kesimpulan'))
                     );
        $this->db->where('id_complain', $id_complain );
        return $this->db->update('tbl_complain', $data);

    }
    

}

/* End of file M_complain.php */
/* Location: ./application/models/M_complain.php */