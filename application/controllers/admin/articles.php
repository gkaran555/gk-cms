<?php

class Articles extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		//access control
		if(!$this->session->userdata('logged_in'))
			redirect('admin/provera/login');
		
	}

    public function index()
    {
		//get filtered articles
		if(!empty($this->input->post('keywords'))){
            $data['articles'] = $this->Article_model->get_filtered_articles($this->input->post('keywords'),'id','DESC', 10);
        } else {
            
            $data['articles'] = $this->Article_model->get_articles('id','DESC', 10);
        }
				
		//get users
		$data['users'] = $this->User_model->get_users('id','DESC', 5);
		
		
		$data['main_content'] = 'admin/articles/index';
        $this->load->view('admin/layouts/main',$data);
			
    }
	
	
	public function add(){
		//validation rules
        $this->form_validation->set_rules('title','Title','trim|required|min_length[4]');
        $this->form_validation->set_rules('body','Body','trim|required');
        $this->form_validation->set_rules('is_published','Publish','required'); 	
		$this->form_validation->set_rules('category','Category','required'); 
        
		$data['categories'] = $this->Article_model->get_categories();
		$data['users'] = $this->User_model->get_users();
		$data['images'] = $this->Upload_model->get_images();
		
						
		if($this->form_validation->run() == FALSE){
            $data['main_content'] = 'admin/articles/add';
            $this->load->view('admin/layouts/main',$data);  
        } else {
             //Post values to array
            $data = array(             
                'title'    => $this->input->post('title'),
                'body'    => $this->input->post('body'),
                'category_id'     => $this->input->post('category'),
                'user_id'    => $this->input->post('user'),
				'is_published'    => $this->input->post('is_published'),
				'in_menu'    => $this->input->post('in_menu'),
				'order'    => $this->input->post('order'),
				'image_id'    => $this->input->post('image')
				
							
            );
			
            //Articles table insert
            $this->Article_model->insert($data);
			//Create Message
            $this->session->set_flashdata('article_saved', 'Your article has been saved');
            //Redirect to pages
            redirect('admin/articles');
           
        }
    }
		
	public function edit($id){
		//validation rules
        $this->form_validation->set_rules('title','Title','trim|required|min_length[4]');
        $this->form_validation->set_rules('body','Body','trim|required');
        $this->form_validation->set_rules('is_published','Publish','required'); 	
		$this->form_validation->set_rules('category','Category','required'); 
        
		$data['categories'] = $this->Article_model->get_categories();
		$data['users'] = $this->User_model->get_users();
		$data['images'] = $this->Upload_model->get_images();
		
		$data['article'] = $this->Article_model->get_article($id);
		
		
		
		if($this->form_validation->run() == FALSE){
            $data['main_content'] = 'admin/articles/edit';
            $this->load->view('admin/layouts/main',$data);  
        } else {
             //Post values to array
            $data = array(             
                'title'    => $this->input->post('title'),
                'body'    => $this->input->post('body'),
                'category_id'     => $this->input->post('category'),
                'user_id'    => $this->input->post('user'),
				'is_published'    => $this->input->post('is_published'),
				'in_menu'    => $this->input->post('in_menu'),
				'order'    => $this->input->post('order'),
				'image_id'    => $this->input->post('image')
				
            );
			
            //Articles table insert
            $this->Article_model->update($data, $id);
			//Create Message
            $this->session->set_flashdata('article_saved', 'Your article has been saved');
            //Redirect to pages
            redirect('admin/articles');
           
        }
    }

	
    public function publish($id){
		            
            $this->Article_model->publish($id);
			//Create Message
            $this->session->set_flashdata('article_published', 'Your article has been published');
            //Redirect to articles
            redirect('admin/articles');
              
    }

	public function unpublish($id){
		            
            $this->Article_model->unpublish($id);
			//Create Message
            $this->session->set_flashdata('article_unpublished', 'Your article has been unpublished');
            //Redirect to articles
            redirect('admin/articles');
               
    }
	
	public function delete($id){
		            
            $this->Article_model->delete($id);
			//Create Message
            $this->session->set_flashdata('article_deleted', 'Your article has been deleted');
            //Redirect to articles
            redirect('admin/articles');
               
    }
	
	  	
	
}

?>