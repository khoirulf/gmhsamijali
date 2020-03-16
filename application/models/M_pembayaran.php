<?php

class M_pembayaran extends CI_Model{
	
	public function __construct(){
		
		$this->load->database();
	}
	
	
	public function get_pembayaran($status){
		
		$query=$this->db->query("Select * From pembayaran where id_transaksi=".$status);
		
		return $query->result_array();
		
		
	}
	
	function konfirmasi() {  
	$query = $this->db->get_where('pembayaran');  
	return $query->result_array();  
	} 

	function addKonfirmasi($data) {  
	$this->db->insert('pembayaran', $data);  
	}  
	
	
}