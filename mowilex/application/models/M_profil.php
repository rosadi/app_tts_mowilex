<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {


    public function get_data(){
        $username = $this->session->userdata('username');
        $query = $this->db->get_where('tbl_user', array('username' => $username));
        return $query->result_array();
    }
    

}

/* End of file M_profil.php */
/* Location: ./application/models/M_profil.php */