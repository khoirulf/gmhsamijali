<?php   
 
class ourInspector extends CI_Controller {    	
	
	public function __construct() {   
		parent::__construct();   
		$this->load->model('M_instructor');  
	} 
	function index() {   
		$data['err_message']="";
		$data = $this->M_instructor->getInstructor();  

	$this->load->view('headerutama',array('data' => $data));
		$this->load->view('data_instructor',array('data' => $data));
	} 

	
   

} ?>