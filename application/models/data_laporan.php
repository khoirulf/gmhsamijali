<?php
class data_laporan extends CI_Model{

	function get_data_stok(){
		
		
        $query = $this->db->query("SELECT MONTH(tanggal) AS bulan,YEAR(tanggal) AS tahun,SUM(total) AS total FROM transaksi WHERE status = '4' AND YEAR(tanggal) = YEAR(now())  GROUP BY MONTH(tanggal)");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function get_bulan_ini(){
		
		
        $query = $this->db->query("SELECT MONTH(tanggal) AS bulan,DAY(tanggal) AS hari,SUM(total) AS total FROM transaksi WHERE status = '4' AND MONTH(tanggal) = MONTH(now()) GROUP BY DAY(tanggal)");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}