<?php 
 
class Upload extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}
 
	public function index(){
		$this->load->view('view', array('error' => ' ' ));
	}
 
	public function upload_1301160239(){
		$config['upload_path']          = './images/';
		$config['allowed_types']        = 'jpg';
		$config['max_size']             = 500;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('view', $error);
		}else{
			$this->load->view('view', array('error' => 'Upload Berhasil !'));
		}
	}
	
}