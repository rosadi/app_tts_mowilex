<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_test extends CI_Model {

    public function id_complain(){
        $query = $this->db->query('SELECT MAX(id_complain) AS MaxIdComp FROM tbl_complain');
        $data = $query->row_array(); 

        $idMaxComplain = $data['MaxIdComp'];

        $urut = (int) substr($idMaxComplain, 1, 4);
       
        $urut++;
        
        $newidMaxComplain = sprintf("%04s", $urut);
        return $newidMaxComplain;

    }

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

    public function input_complain(){
        $data = array(  
                        'id_complain'  => $this->input->POST('id_complain'),
                        'no_complain'  => $this->input->POST('no_complain'),
                        'tgl_complain' => $this->input->POST('tgl_complain'),
                        'perihal'      => $this->input->POST('perihal'),
                        'kode_toko'    => $this->input->POST('kode_toko'),
                        'produk'       => $this->input->POST('produk'),
                        'batch'        => $this->input->POST('batch'),
                        'masalah'      => $this->input->POST('masalah'),
                        'verifikasi'   => $this->input->POST('verifikasi'),
                        'kesimpulan'   => $this->input->POST('kesimpulan'),
                        'username'     => $this->input->POST('username')
                     );
        return $this->db->insert('tbl_complain', $data);
    }

}

/* End of file M_test.php */
/* Location: ./application/models/M_test.php */ 