<?php

class M_barangpembelian extends CI_Model{
	
	public function __construct(){
		
		$this->load->database();
	}
	
	
	public function get_listbarang($status){
		
		$query=$this->db->query("Select * From barangdibeli where id_transaksi=".$status);
		
		return $query->result_array();
		
		
	}
	
	   function insertBarangdibeli($data){
    	$this->db->insert('barangdibeli',$data);
    }

	
}