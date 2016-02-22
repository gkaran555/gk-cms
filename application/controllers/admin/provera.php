<?php
class Provera extends MY_Controller{
            
    public function login(){
				
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');      
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
		  	  
        		
		if($this->form_validation->run() == FALSE){
			$this->load->view('admin/layouts/login');
                     
            
        } else {
           //Get from post
           $username = $this->input->post('username');
           $password = $this->input->post('password');
               
           //Get user id from model
           $user_id = $this->Provera_model->login_user($username,$password);
               
           //Validate user
           if($user_id){
               //Create array of user data
               $user_data = array(
                       'user_id'   => $user_id,
                       'username'  => $username,
                       'logged_in' => true
                );
                //Set session userdata
               $this->session->set_userdata($user_data);
			   
			   $this->session->set_flashdata('pass_login', 'You are now logged in');
               redirect('admin/dashboard');
			   
            } else {
                //Set error
                $this->session->set_flashdata('login_failed', 'Sorry, the login info that you entered is invalid');
                redirect('admin/provera/login');
            }
        }
		
    }
	
	public function logout(){
        //Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        
         //Set message
        $this->session->set_flashdata('logged_out', 'You have been logged out');
        redirect('admin/provera/login');
    }
    
    
  
    
    
}