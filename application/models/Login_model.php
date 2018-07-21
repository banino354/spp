<?php 
	class Login_model extends CI_Model {

		function login(){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

		    $this->db->where('username', $username );
		    $this->db->where('password', $password );
			$result=$this->db->get('login');
			if($result->num_rows()){
				return 1;
			}else{
				return 0;
			}
		}
	}
 ?>