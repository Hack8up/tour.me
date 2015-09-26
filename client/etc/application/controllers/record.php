<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Record extends CI_Controller{
	function __construct(){
     parent::__construct();
     $this->load->model('User_model');
   }

   function index(){
   	$result=$this->User_model->record();

   	if($result){
   		$session_data = $this->session->userdata('logged_in');
   		$data['users'] = $this->User_model->record();
   		$data['username'] = $session_data['username'];
     	$this->load->view('record_view', $data);
   	}
   else{
    	redirect('home', 'refresh');}
	
	}

	function delete(){
		$id = $this->input->get('id');
		$this->User_model->delete_user($id);

		redirect('record', 'refresh');
	}
}