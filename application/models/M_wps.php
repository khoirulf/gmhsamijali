<?php  

class M_wps extends CI_Model {

		public function tambah_stok($stok, $id){
		
		
		
		$query=$this->db->query("  UPDATE `produk` SET `stok`=".$stok." WHERE `id_produk`=".$id);
		
		
	}
	
	function wpss() {  
	$this->db->where('kategori', 'wps');
	$query = $this->db->get('produk');  
	return $query->result_array();  
	
	} 
	
	function eng() {  
	$this->db->where('kategori', 'eng');
	$query = $this->db->get('produk');  
	return $query->result_array();  
	
	} 
	
	function ndt() {  
	$this->db->where('kategori', 'ndt');
	$query = $this->db->get('produk');  
	return $query->result_array();  
	
	} 
	
	function getDetailProduk($where) {
	// $this->db->where_in('id_produk', $where);
	$query = $this->db->get_where('produk', $where);  
	return $query->result_array();  
	
	} 

    function addProduk($data) {
		$this->db->insert('produk', $data);
	}


 	function update_produk($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}

	function hapus_produk($where) {
		$this->db->where('id_produk', $where);
		$this->db->delete('produk');
	}
}