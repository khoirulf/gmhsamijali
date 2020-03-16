<?php

class M_alamat extends CI_Model{
	
	public function __construct(){
		
		$this->load->database();
	}
	
	
	public function get_kecKab($status){
		
		$query=$this->db->query("Select * From alamat where id_alamat=".$status);
		
		return $query->result_array();
		
		
	}
	
	function insertAlamat($data){
    	$this->db->insert('alamat',$data);
    }
	
	
	
}