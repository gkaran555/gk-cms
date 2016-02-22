<?php

class Categories extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		//access control
		if(!$this->session->userdata('logged_in'))
			redirect('admin/provera/login');
		
	}

    public function index()
    {
   	    //get categories
		$data['categories'] = $this->Article_model->get_categories('id','DESC');
		
				
		$data['main_content'] = 'admin/categories/index';
        $this->load->view('admin/layouts/main',$data);
			
    }
	
	public function add(){
		//validation rules
        $this->form_validation->set_rules('name','Name','trim|required|min_length[4]');
        		
		if($this->form_validation->run() == FALSE){
            $data['main_content'] = 'admin/categories/add';
            $this->load->view('admin/layouts/main',$data);  
        } else {
             //Post values to array
            $data = array(             
   				'name'  => $this->input->post('name')
            );
			
            
            $this->Article_model->insert_category($data);
			//Create Message
            $this->session->set_flashdata('category_saved', 'Your category has been saved');
            //Redirect to pages
            redirect('admin/categories');
           
        }
    }
	
	public function edit($id){
		//validation rules
        $this->form_validation->set_rules('name','Name','trim|required|min_length[4]');
         				
		if($this->form_validation->run() == FALSE){
			
			$data['category'] = $this->Article_model->get_category($id);
			
            $data['main_content'] = 'admin/categories/edit';
            $this->load->view('admin/layouts/main',$data);  
			
        } else {
             //Post values to array
            $data = array(             
   				'name'  => $this->input->post('name')
            );
			
            
            $this->Article_model->update_category($data, $id);
            //Create Message
            $this->session->set_flashdata('category_saved', 'Your category has been saved');
            //Redirect to pages
            redirect('admin/categories');
           
        }
    }
	
	public function delete($id){
		            
            $this->Article_model->delete_category($id);
			//Create Message
            $this->session->set_flashdata('category_deleted', 'Your category has been deleted');
            //Redirect to articles
            redirect('admin/categories');
               
    }
	
	
}

?>