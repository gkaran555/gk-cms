<?php

class Groups extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		//access control
		if(!$this->session->userdata('logged_in'))
			redirect('admin/provera/login');
		
	}

    public function index()
    {
		
   	    $data['groups'] = $this->User_model->get_groups();
				
		$data['main_content'] = 'admin/groups/index';
        $this->load->view('admin/layouts/main',$data);
		
		
    }
	
	public function add(){
		//validation rules
        $this->form_validation->set_rules('name','Name','trim|required|min_length[3]');
        		
		if($this->form_validation->run() == FALSE){
            $data['main_content'] = 'admin/groups/add';
            $this->load->view('admin/layouts/main',$data);  
        } else {
             //Post values to array
            $data = array(             
   				'name'  => $this->input->post('name')
            );
			
            
            $this->User_model->insert_group($data);
			//Create Message
            $this->session->set_flashdata('group_saved', 'Your group has been saved');
            //Redirect to pages
            redirect('admin/groups');
           
        }
    }
	
	public function edit($id){
		//validation rules
        $this->form_validation->set_rules('name','Name','trim|required|min_length[3]');
        		
		if($this->form_validation->run() == FALSE){
			
			$data['group'] = $this->User_model->get_group($id);
			
            $data['main_content'] = 'admin/groups/edit';
            $this->load->view('admin/layouts/main',$data);  
        } else {
             //Post values to array
            $data = array(             
   				'name'  => $this->input->post('name')
            );
			
            
            $this->User_model->update_group($data, $id);
			//Create Message
            $this->session->set_flashdata('group_saved', 'Your group has been saved');
            //Redirect to pages
            redirect('admin/groups');
           
        }
    }
	
	public function delete($id){
		            
            $this->User_model->delete_group($id);
			//Create Message
            $this->session->set_flashdata('group_deleted', 'Group has been deleted');
            
            redirect('admin/groups');
               
    }
		
			
}

?>