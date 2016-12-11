<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index()	{
		$this->load->view('main');
	}

	public function upload() {
		$config['upload_path'] 		= './assets/uploads/';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size']  		= '1024';
		$config['remove_spaces']	= true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('input_filename')) {
			$error = array('error' => $this->upload->display_errors());
			echo json_encode($error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
	}

	public function refreshDirectoryContents() {
		$this->load->helper('directory');
		$data['map'] = directory_map('./assets/uploads/');
		$this->load->view('directory', $data);
	}
}
