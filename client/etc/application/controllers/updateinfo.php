<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class UpdateInfo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[1]|max_length[30]');
      	$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required|min_length[2]|max_length[30]');
      	$this->form_validation->set_rules('sname', 'Last Name', 'trim|required|min_length[2]|max_length[30]');
	    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]|xss_clean|callback_confirm');
		
	    $id = $this->input->get('id');
	   	$session_data = $this->session->userdata('logged_in');
	   	$data['users'] = $this->User_model->fetch_info($id);
	   	$data['username'] = $session_data['username'];

	    if ($this->form_validation->run() == FALSE) {
	    	$this->load->view('update_view', $data);
	    }else{
	    	redirect('record','refresh');
	    }
	}
	public function confirm(){
		$id = $this->input->post('userid');
		$info = array(
			'fname' => $this->input->post('fname'), 
			'mname' => $this->input->post('mname'),
			'sname' => $this->input->post('sname'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username')
			);
		//die(print_r($info));
		$this->User_model->update($info, $id);
	}
}