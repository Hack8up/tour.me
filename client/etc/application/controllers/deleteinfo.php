<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Deleteinfo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$id = $this->input->post('userid');

		$result = $this->User_model->delete($id);
		if ($result) {
			redirect('record', 'refresh');
		}else{
			$this->load->view('record');
		}
	}
}