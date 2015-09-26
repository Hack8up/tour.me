<?php

Class Post extends CI_Model{

	function get_posts($num=20,$start=0){
		$this->db->select()->from('posts')->where('active',1)->order_by('date_added','desc')->limit($num,$start);
		$query=$this->db->get();
		return $query->result_array();
	}

}