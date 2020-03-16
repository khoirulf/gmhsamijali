<?php  

class M_instructor extends CI_Model {

    function addProduk($data) {
		$this->db->insert('instructor', $data);
	}

function getInstructor() {  
	$query = $this->db->get('instructor');  
	return $query->result_array();  
	
	} 
 		
function hapus_produk($where) {
		$this->db->where('id_instructor', $where);
		$this->db->delete('instructor');
	}

}