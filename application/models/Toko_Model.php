<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Toko_Model extends CI_Model {
    
    //  Data Toko
    public function getAll()
	{
     
        return $this->db->get('toko')->result_array();
	}
    // ---------------------- 
    
    function detailInfoGudang($id_barang) {
        $query = $this->db->get_where('gudang', ['id_barang' => $id_barang])->row_array();
        return $query;
    }
    // ---------------------- 
    
    function terimaBarangGudang($id_barang) {
        $query = $this->db->get_where('masuk_gudang', ['id_barang' => $id_barang])->result_array();
        return $query;
    }
    // ---------------------- 
    

    // function dataToko($id_toko) {
    //    $query = $this->db->get_where('toko', ['id_toko' => $id_toko]);
    //    return $query->row();
    // }
}