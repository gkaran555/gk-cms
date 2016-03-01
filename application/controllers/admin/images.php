<?php

class Images extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		//access control
		if(!$this->session->userdata('logged_in'))
			redirect('admin/provera/login');
		
	}

    public function index()
    {
   	    //get categories
		$data['images'] = $this->Upload_model->get_images('id','DESC');
		
				
		$data['main_content'] = 'admin/images/index';
        $this->load->view('admin/layouts/main',$data);
			
    }
	
	
	
	public function delete($id){
		            
            $this->Upload_model->delete_image($id);
			//Create Message
            $this->session->set_flashdata('image_deleted', 'Your image has been deleted');
            //Redirect to articles
            redirect('admin/images');
               
    }
	
	
	
}

?>