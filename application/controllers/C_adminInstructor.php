	<?php  

class C_adminInstructor extends CI_Controller {

	//CRUD produk, pegawai
	//pindah halaman admin (CRUD Produk), CRUD Pegawai


	public function __construct() {
		parent::__construct();
		$this->load->model('M_instructor');
		$this->load->library('form_validation');
		if(!$this->session->has_userdata('id')){
        	redirect('/'); } }


	function index() {
		$this->load->view('admin/HeaderAdmin');
		$this->load->view('admin/AdminPage');
	}


	function datainstructor() {
		$data = $this->M_instructor->getInstructor();
		$this->load->view('admin/HeaderAdmin');
		$this->load->view('admin/BodyDataInstructor', array('data' => $data));
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

	function delproduk($id_instructor) {
		$this->M_instructor->hapus_produk($id_instructor);
        $this->datainstructor(); }
}

