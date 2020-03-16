	<?php  

class C_instructor extends CI_Controller {

	//CRUD produk, pegawai
	//pindah halaman admin (CRUD Produk), CRUD Pegawai


	public function __construct() {
		parent::__construct();
		$this->load->model('M_instructor');
		$this->load->library('form_validation');
		 }


	function index() {
		$this->load->view('Headerutama');
		$this->load->view('instructor');
	}

	function uploadjpg(){
		$this->load->helper('security'); 
		$this->load->helper('url');
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 1000000;
        //$config['max_width']            = 1000000;
        //$config['max_height']           = 1000000;
       
        $this->load->library('upload', $config);
        // $this->upload->initialize($config);  
        $this->load->helper('form');
        $fileUploads = array();
		$this->upload->do_upload('foto');
		$fileUploads = $this->upload->data('file_name');
		return $fileUploads;
		
		$fileUpload = array();
		$this->upload->do_upload('cv');
		$fileUpload = $this->upload->data('file_name');
		return $fileUpload;
	}
	
		function uploadpdf(){
		$this->load->helper('security'); 
		$this->load->helper('url');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf';
		
        $this->load->library('upload', $config);
        // $this->upload->initialize($config);  
        $this->load->helper('form');
        $fileUpload = array();
		$this->upload->do_upload('cv');
		$fileUpload = $this->upload->data('file_name');
		return $fileUpload;
	}

	function createproduk(){
			$this->uploadjpg();
			
			//$this->uploadpdf();
			
			$komkom = $this->uploadjpg($fileUploads);
			$kimkim = $this->uploadpdf($fileUpload);
            $nama_instructor = $this->input->post('nama_instructor');
        	$keahlian = $this->input->post('keahlian');
        	
        	
        	$data = array(
                'nama_instructor' => $nama_instructor,
				'gambar' => $komkom,
				'cv' => $kimkim,
                'keahlian' => $keahlian,
                
               
                );

            $this->M_instructor->addProduk($data);
            
            redirect(base_url('index.php/ourInspector'));
        	
}}
           // redirect($uri = base_url('index.php/admin/inputkompetisi'), $method = 'auto', $code = NULL);}}
