<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$this->load->view('login_view');
	}
}