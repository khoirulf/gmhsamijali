	<?php  

class C_adminproduk extends CI_Controller {

	//CRUD produk, pegawai
	//pindah halaman admin (CRUD Produk), CRUD Pegawai


	public function __construct() {
		parent::__construct();
		$this->load->model('M_Produk');
		$this->load->library('form_validation');
		if(!$this->session->has_userdata('id')){
        	redirect('/'); } }


	function index() {
		$this->load->view('admin/HeaderAdmin');
		$this->load->view('admin/AdminPage');
	}

	function tambahproduk() {
		$this->load->view('admin/BodyFormProduk');
		$this->load->view('admin/HeaderAdmin');
	}


	function dataproduk() {
		$data = $this->M_Produk->getProduk();
		$this->load->view('admin/HeaderAdmin');
		$this->load->view('admin/BodyDataProduk', array('data' => $data));
	}
	
	function editproduk($id_produk) {
		$produk = $this->M_Produk->getBarangWhere($id_produk);
		$data = array(
			"id_produk"			=> $produk[0]['id_produk'],	
			"nama_produk" 		=> $produk[0]['nama_produk'],
			"detail_produk" 	=> $produk[0]['detail_produk'],
			"harga"	 			=> $produk[0]['harga'],
			
			
		);

		$this->load->view('admin/BodyEditProduk', $data);
		$this->load->view('admin/HeaderAdmin');
	}
	
	function uploadproduk() {
		// $this->form_validation->set_rules('nama_produk','Nama Produk','trim|required|min_length[5]|max_length[50]');
		// $this->form_validation->set_rules('harga','Harga Produk','numeric','trim|required|min_length[5]|max_length[10]');
		// $this->form_validation->set_rules('detail_produk','Deskripsi Produk','trim|required|min_length[5]|max_length[200]');	
		$this->load->helper('url');
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;
       
        $this->load->library('upload', $config);
        $this->load->helper('form');
        $fileUpload = array();
        

		if(!$this->upload->do_upload('image')){
				$this->load->helper('security'); 
						
				        $id_produk 			= $this->input->post('id_produk', TRUE);
						$nama_produk		= $this->input->post('nama_produk', TRUE);
						$harga 		= $this->input->post('harga', TRUE);
						$detail_produk 	= $this->input->post('detail_produk', TRUE);
					
						
						$data_insert 	= array(			
						'nama_produk' 		=> $nama_produk,
						'harga' 		=> $harga,
						'detail_produk'	=> $detail_produk,
						
					
						);

						$where = array('id_produk' => $id_produk);
						$res = $this->M_Produk->update_produk('produk', $data_insert, $where);
						redirect(base_url('index.php/C_adminproduk/dataproduk'));
		}
		else{

			$this->upload->do_upload('image');

						$id_produk 			= $this->input->post('id_produk', TRUE);
						$nama_produk		= $this->input->post('nama_produk', TRUE);
						$harga 		= $this->input->post('harga', TRUE);
						$detail_produk 	= $this->input->post('detail_produk', TRUE);
					
						$fileUpload			= $this->upload->data();

			$data_insert 	= array(			
						'nama_produk' 		=> $nama_produk,
						'harga' 		=> $harga,
						'detail_produk'	=> $detail_produk,
						'image' 		=> $fileUpload['file_name'],
					
						);

			$where = array('id_produk' => $id_produk);
						$res = $this->M_Produk->update_produk('produk', $data_insert, $where);
						redirect(base_url('index.php/C_adminproduk/dataproduk'));
			}

          
	}


    function validationDocreateproduk(){
		$this->form_validation->set_rules('nama_produk','Nama Produk','trim|required|min_length[5]|max_length[50]|is_unique[produk.nama_produk]');
		$this->form_validation->set_rules('harga','Harga Produk','numeric','trim|required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('detail_produk','Deskripsi Produk','trim|required|min_length[5]|max_length[50]');

		
		if($this->form_validation->run() != false){ 
            $this->createproduk();
        	}
		else{
			//$this->dataproduk();
			echo 'gagal input';
		}
	}

	function createproduk(){
		$this->load->helper('security'); 
		$this->load->helper('url');
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;
       
        $this->load->library('upload', $config);
        // $this->upload->initialize($config);  
        $this->load->helper('form');
        $fileUpload = array();
        

      
        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            // print_r($fileUpload);
        }
        else{
            $fileUpload = $this->upload->data();
            $nama_produk = $this->input->post('nama_produk');
        	$harga = $this->input->post('harga');
        	$detail_produk = $this->input->post('detail_produk');
        	$kategori = $this->input->post('kategori');
        	$data = array(
                'nama_produk' => $nama_produk,
                'harga' => $harga,
                'detail_produk' => $detail_produk,
                'image' => $fileUpload['file_name'],
               'kategori' => $kategori,
                );

            $this->M_Produk->addProduk($data);
            $this->dataproduk();
            //print_r($fileUpload);
        	}
        }
           // redirect($uri = base_url('index.php/admin/inputkompetisi'), $method = 'auto', $code = NULL);}}


	function delproduk($id_produk) {
		$this->M_Produk->hapus_produk($id_produk);
        $this->dataproduk(); }
}

