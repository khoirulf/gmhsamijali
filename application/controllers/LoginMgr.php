<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginMgr extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_datauser');
   
		$this->load->library('form_validation');
      
    }
    public function login($test=""){
		
		
    		
		if($test==""){
			$pesan['berhasil']="";
			$pesan['warna']='';
			
		}
		else if($test==1){
			
			$pesan['berhasil']='berhasil daftar, silakan login ';
			$pesan['warna']='white';
			
			
		}
		
		else if($test==2){
			
			$pesan['berhasil']='user atau pass salah';
			$pesan['warna']='red';
			
		}
		
		
		$this->load->view('view_login_user', $pesan);
			
    	
   

   }
   
	public function dologin($type){
		
		$Username=$this->input->post('username');
		$Password=$this->input->post('password');
		
		
		$this->form_validation->set_rules('username', $Username, 'required');
		$this->form_validation->set_rules('password', $Password, 'required');
		
		$con1 = array('username' => $this->input->post('username'));

		
		
		
		if ($this->form_validation->run()) {
			switch ($type) {
			case 'user':
			
			
			
			
				$Password=sha1(md5($Password));
				
					
				
				$data =$this->M_datauser->roles($Username, $Password);
			
			
			if($data==null){
				
				
				redirect('login/2');
				
			}
			else{
				

							$session_data = array(
									'id'=>$data[0]['iduser']
									);
								$this->session->set_userdata($session_data);
								redirect('C_adminproduk');
							
							break;
				
			}

			}

	}
}
}