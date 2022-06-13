<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Gudang_Model extends CI_Model {
    
    //  Data Baru Gudang
    public function getAll()
	{
        return $this->db->get('gudang')->result_array();
	}
    // ---------------------- 
    
    function detailInfoGudang($id_barang) {
        $query = $this->db->get_where('gudang', ['id_barang' => $id_barang])->row_array();
        return $query;
    }
    // ---------------------- 
    
    function terimaBarangGudang($id_barang) {
        $query = $this->db->query("SELECT * FROM gudang AS a LEFT JOIN masuk_gudang AS b ON (a.id_barang = b.id_barang) WHERE a.id_barang = $id_barang")->result_array();
        return $query;
    }
    // ---------------------- 
    
    function kirimBarangGudang($id_barang) {
        $query = $this->db->get_where('keluar_gudang', ['id_barang' => $id_barang])->result_array();
        return $query;
    }
    // ---------------------- 
    


}