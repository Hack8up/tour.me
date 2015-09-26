<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Deleteall extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$this->User_model->deleteall();

		redirect('record', 'refresh');
	}
}