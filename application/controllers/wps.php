<?php   
 
class wps extends CI_Controller {    	
	
	public function __construct() {   
		parent::__construct();   
		$this->load->model('M_wps');  
	} 
	function index() {   
		$data['err_message']="";
		$data = $this->M_wps->wpss();  

	$this->load->view('headerutama',array('data' => $data));
		$this->load->view('wps',array('data' => $data));
	} 

	
   

} ?>