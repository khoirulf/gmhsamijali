<?php  

class M_Produk extends CI_Model {

		public function tambah_stok($stok, $id){
		
		
		
		$query=$this->db->query("  UPDATE `produk` SET `stok`=".$stok." WHERE `id_produk`=".$id);
		
		
	}
	
	public function get_barang($status){
		
		$query=$this->db->query("Select * From `produk` where id_produk=".$status);
		
		return $query->result_array();
		
		
	}
	
	public function getProdukid($where){
        $this->db->where('id_produk',$where);
		$data = $this->db->get('produk');
		return $data->result_array();
	}
	
	function getProduk() {  
	$query = $this->db->get('produk');  
	return $query->result_array();  
	
	} 
	
	function getDetailProduk($where) {
	// $this->db->where_in('id_produk', $where);
	$query = $this->db->get_where('produk', $where);  
	return $query->result_array();  
	
	} 

    function getTotalRow($nama_produk,$produk_harga,$produk_deskripsi,$produk_size,$produk_image) {
		$this->db->where('nama_produk',$nama_produk);
		$this->db->where('harga',$produk_harga);
		$this->db->where('detail_produk',$produk_deskripsi);
		//$this->db->where('produk_size',$produk_size);
		$this->db->where('image',$produk_image);
        return $this->db->get('produk')->num_rows();
    }

    function getTotalRowByID($id) {
		$this->db->where('id_produk',$id);
        return $this->db->get('produk')->num_rows();
    }


    function addProduk($data) {
		$this->db->insert('produk', $data);
	}


 	function getBarangWhere($id_produk){
 		$this->db->where('id_produk', $id_produk);
		$data =$this->db->get('produk');
		return $data->result_array();
 	}

 	function getId($where){
 		$this->db->where('nama_produk', $where);
 		$data = $this->db->get('produk');
 		return $data->result_array();
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