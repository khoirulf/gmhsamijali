<?php

class M_Transaksi extends CI_Model{
	
	public function __construct(){
		
		$this->load->database();
	}
	
	
	function getList(){
		
		$query=$this->db->query("Select id_transaksi From transaksi where status=3");
		
		return $query->result_array();
		
		
	}
	
	function getPemesanan($where) {  
	$query = $this->db->get_where('transaksi', $where);  
	return $query->result_array();  
	} 

	
	public function get_transaksi($status){
		
		$query=$this->db->query("Select * From transaksi where status=".$status);
		
		return $query->result_array();
		
		
	}
	
	
	function insertTransaksi($data){
        $this->db->insert('transaksi',$data);
    }
	
	public function get_resi($status){
		
		$query=$this->db->query("Select * From transaksi where `id_transaksi`=".$status);
		
		return $query->result_array();
		
		
	}
	
	public function ubah_status($status, $id){
		
		$query=$this->db->query("  UPDATE `transaksi` SET `status`=".$status." WHERE `id_transaksi`=".$id);
		
		
		
	}
	
	public function ubah_resi($status, $id, $resi, $jasapengiriman){
		
		$query=$this->db->query("  UPDATE `transaksi` SET `status`=".$status.", `no_resi`=".$resi.", `jasapengiriman`='".$jasapengiriman."' WHERE `id_transaksi`=".$id);
		
	
		
	}
	
	
}