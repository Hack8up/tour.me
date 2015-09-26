<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class User_model extends CI_Model{

	function login($username, $password){
		/*$this->db->select('id','username','password', 'fname');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);*/

		$query=$this->db->get_where('user', array('username'=>$username, 'password'=>md5($password)));

		if($query->num_rows()==1){
			//die(print_r($query->result_array()));
			return $query->result();
		}

		else{
			return false;
		}

	}

	function register($fname, $mname, $sname, $email, $username, $password){

		$this->db->set('fname', $fname);
		$this->db->set('mname', $mname);
		$this->db->set('sname', $sname);
		$this->db->set('email', $email);
		$this->db->set('username', $username);
		$this->db->set('password', md5($password));

		$this->db->insert('user');

		$query=$this->db->get('user');

		return $query->result();
	}

	function record(){
		return $this->db->get('user')->result();
	}

	function delete_user($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
	}

	function fetch_info($id){
		$query=$this->db->get_where('user', array('id'=>$id));
		return $query->result();
	}

	function update($info, $id){
		$this->db->where('id', $id);
		$this->db->update('user', $info); 
	}

	function delete($id){
		$query = $this->db->delete('user', array('id' => $id)); 
		return $query->result();
	}

	function deleteall(){
		$this->db->empty_table('user');
	}
}