<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Adduser extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required|min_length[2]|max_length[30]');
		$this->form_validation->set_rules('sname', 'Last Name', 'trim|required|min_length[2]|max_length[30]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]|xss_clean|is_unique[users.username]|callback_confirm');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passwordconf]|md5');
		$this->form_validation->set_rules('passwordconf', 'PasswordConf', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('adduser_view');
		}

		else{
			redirect('record', 'refresh');
		}
		
	}

	public function confirm($username){
		$fname = $this->input->post('fname');
		$mname = $this->input->post('mname');
		$sname = $this->input->post('sname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$con_password = $this->input->post('passwordconf');

		$result=$this->User_model->register($fname, $mname, $sname, $email, $username, $password);

		if($result){
       		return TRUE;
   		}
       else{
       		$this->form_validation->set_message('confirm', 'Registration failed');
       		return FALSE;
       }
	}

}