<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class VerifyUpdate extends CI_Controller {

   function __construct(){
     parent::__construct();
     $this->load->model('User_model','',TRUE);
   }

   function index(){
      $id = $this->input->get('id');
      //$result=$this->User_model->fetch_info($id);

     $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[1]|max_length[30]');
      $this->form_validation->set_rules('mname', 'Middle Name', 'trim|required|min_length[2]|max_length[30]');
      $this->form_validation->set_rules('sname', 'Last Name', 'trim|required|min_length[2]|max_length[30]');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
      $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]|xss_clean|is_unique[users.username]|callback_confirm');

      $session_data = $this->session->userdata('logged_in');
      //$data['users'] = $this->User_model->fetch_info($id);
      $data['username'] = $session_data['username'];

      /*$updateArray = array
      ( 'fname' => $this->input->post('fname'),
        'mname' => $this->input->post('mname'),
        'sname' => $this->input->post('sname'),
        'email' => $this->input->post('email'),
        'username' => $this->input->post('username')
        );*/
      $fname = $this->input->post('fname');
      die(print_r($array));

   }

   function confirm(){
      $id = $this->input->get('id');
          
   }
}


