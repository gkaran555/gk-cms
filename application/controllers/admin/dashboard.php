<?php

class Dashboard extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		//access control
		if(!$this->session->userdata('logged_in'))
			redirect('admin/provera/login');
		
	}

    public function index()
    {
   	    //get articles
		$data['articles'] = $this->Article_model->get_articles('id','DESC', 10);
				
	    //get categories
		$data['categories'] = $this->Article_model->get_categories('id','DESC', 5);
		
		//get users
		$data['users'] = $this->User_model->get_users('id','DESC', 5);
		
		
		$data['main_content'] = 'admin/dashboard/index';
        $this->load->view('admin/layouts/main',$data);
		
		
    }
		
			
}

?>