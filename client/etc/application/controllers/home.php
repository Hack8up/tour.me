<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
Class Home extends CI_Controller {

 function __construct(){
     parent::__construct();
     $this->load->model('User_model');
   }

  function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['username'] = $session_data['username'];
     $this->load->view('home_view', $data);
   }
   else
   {
     redirect('login', 'refresh');
   }
 }

 function explore()
 {
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['username'] = $session_data['username'];
     $this->load->view('explore_view', $data);
   }
   else
   {
     redirect('login', 'refresh');
   }

 }

 function travels()
 {
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['username'] = $session_data['username'];
     $this->load->view('travels_view', $data);
   }
   else
   {
     redirect('login', 'refresh');
   }
 }

 function tours()
 {
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['username'] = $session_data['username'];
     $this->load->view('tours_view', $data);
   }
   else
   {
     redirect('login', 'refresh');
   }
 }

 function mailbox()
 {
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['fname'] = $session_data['fname'];
     $data['username'] = $session_data['username'];
     $this->load->view('mailbox_view', $data);
   }
   else
   {
     redirect('login', 'refresh');
   }
 }

 function compose(){
  if($this->session->userdata('logged_in'))
     {
       $session_data = $this->session->userdata('logged_in');
       $data['fname'] = $session_data['fname'];
       $data['username'] = $session_data['username'];
       $this->load->view('compose_view', $data);
     }
     else
     {
       redirect('login', 'refresh');
     }
 }

 function r5feed()
 {
  if($this->session->userdata('logged_in'))
     {
       $session_data = $this->session->userdata('logged_in');
       $data['fname'] = $session_data['fname'];
       $data['username'] = $session_data['username'];
       $this->load->view('feed_view', $data);
     }
     else
     {
       redirect('login', 'refresh');
     }

 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}
