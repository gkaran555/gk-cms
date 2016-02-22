<?php

class Users extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		//access control
		if(!$this->session->userdata('logged_in'))
			redirect('admin/provera/login');
		
	}

    public function index()
    {
   	    		
		//get users
		$data['users'] = $this->User_model->get_users();
				
		$data['main_content'] = 'admin/users/index';
        $this->load->view('admin/layouts/main',$data);
				
    }
	
	public function add(){
		//validation rules
        $this->form_validation->set_rules('first_name','First Name','trim|required');
        $this->form_validation->set_rules('last_name','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');      
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('password2','Confirm Password','trim|required|matches[password]');
        
		
		$data['groups'] = $this->User_model->get_groups();
				
		if($this->form_validation->run() == FALSE){
            $data['main_content'] = 'admin/users/add';
            $this->load->view('admin/layouts/main',$data);  
        } else {
             //Post values to array
            $data = array(             
                'first_name'       => $this->input->post('first_name'),
                'last_name'        => $this->input->post('last_name'),
				'group_id'         => $this->input->post('user_group'),
				'email'            => $this->input->post('email'),
                'username'         => $this->input->post('username'),
                'password'         => md5($this->input->post('password'))
				
				
            );
			
            $this->User_model->insert($data);
			//Create Message
            $this->session->set_flashdata('user_saved', 'User has been saved');
            //Redirect to pages
            redirect('admin/users');
           
        }
    }
		
	public function edit($id){
		//validation rules
        $this->form_validation->set_rules('first_name','First Name','trim|required');
        $this->form_validation->set_rules('last_name','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');      
                		
		$data['groups'] = $this->User_model->get_groups();
		$data['user'] = $this->User_model->get_user($id);
				
		if($this->form_validation->run() == FALSE){
            $data['main_content'] = 'admin/users/edit';
            $this->load->view('admin/layouts/main',$data);  
        } else {
             //Post values to array
            $data = array(             
                'first_name'       => $this->input->post('first_name'),
                'last_name'        => $this->input->post('last_name'),
				'email'            => $this->input->post('email'),
                'username'         => $this->input->post('username'),
   				'group_id'         => $this->input->post('group_id')
				
            );
			
            $this->User_model->update($data, $id);
			//Create Message
            $this->session->set_flashdata('user_saved', 'User has been saved');
            //Redirect to pages
            redirect('admin/users');
           
        }
    }
	
	public function delete($id){
		            
            $this->User_model->delete($id);
			//Create Message
            $this->session->set_flashdata('user_deleted', 'User has been deleted');
            
            redirect('admin/users');
               
    }



	
}

?>