<?php  

class M_Pegawai extends CI_Model {


 

 	function update_pegawai($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}

	function hapus_pegawai($where) {
		$this->db->where('id', $where);
		$this->db->delete('pegawai');
	}
	
	function addPegawai($data) {
		$this->db->insert('pegawai', $data);
	}
	
	function getPegawai(){
		$data =$this->db->get('pegawai');
		return $data->result_array();
 	}
 	function getPegawaiWhere($id){
 		$this->db->where('id', $id);
		$data =$this->db->get('pegawai');
		return $data->result_array();
 	}
	
	
}