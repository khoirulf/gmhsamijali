<?php   
 
class C_Front1 extends CI_Controller {    	
	
	public function __construct() {   
		parent::__construct();   
		$this->load->model('M_produk');  
	} 
	function index() {   
		$data['err_message']="";
		$data = $this->M_produk->getProduk();  

	$this->load->view('headerutama',array('data' => $data));
		$this->load->view('utama',array('data' => $data));
	} 

	function faq(){
		$this->load->view('faq');
	}
	function detailproduk($id) {     
		$data = $this->M_produk->getDetailProduk("id_produk = ".$id);  	
		$this->load->view('detail2',array('data' => $data)); 
	} 
    
	function contact(){
		$this->load->view('contact');
	}
	
   

} ?>