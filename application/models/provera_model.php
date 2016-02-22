<?php

class Provera_model extends CI_Model{
	
	public function login_user($username,$passowrd){
        //Secure password
        $enc_password = md5($passowrd);
        
        //Validate
        $this->db->where('username',$username);
        $this->db->where('password',$enc_password);
        
        $result = $this->db->get('users');
		
        if($result->num_rows() == 1){
            return $result->row();
        } else {
            return false;
        }
    }
     
    
        
}
