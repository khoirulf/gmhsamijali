<?php

class M_datauser extends CI_Model{
	
	public function __construct(){
		
		$this->load->database();
	}
	
	   public function create($table, $data){
                $result = $this->db->insert($table, $data);
                if ($result) {
                        return true;
                }
        }
		
		public function cek($user, $email){
              
			   
			   $query=$this->db->query("SELECT * FROM `data_user` WHERE `username` LIKE '".$user."' AND `email` LIKE '".$email."'");
			  
			   
			   
                return $query->result_array();
        }
	
	function hapus_retail($where) {
		$this->db->where('iduser', $where);
		$this->db->delete('data_user');
	}
	function getRetail($where){
		$this->db->where('tipeakun', $where);
		$data =$this->db->get('data_user');
		return $data->result_array();
 	}
	
	public function roles($user, $pass){
               //$query = $this->db->where('username','faney', 'password', 'userid');
			   
			   $query=$this->db->query("SELECT * FROM `data_user` WHERE `username` LIKE '".$user."' AND `password` LIKE '".$pass."'");
			  
			   
			   
                return $query->result_array();
        }
	
	function updateCustomer($data_update, $where){
	$this->db->where_in('iduser', $where);
	$res = $this->db->update('data_user',$data_update);
	return $res;
	}

	function getCustomer() {  
	$query = $this->db->get('data_user');  
	return $query->result_array();
	} 

	function getDetailCustomer($where) {  
	$query = $this->db->get_where('data_user', $where);  
	return $query->result_array();  
	} 

	
	public function get_nama($status){
		
		$query=$this->db->query("Select * From data_user where iduser=".$status);
		
		return $query->result_array();
		
		
	}
	
	
	
}