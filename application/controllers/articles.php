<?php

class Articles extends MY_Controller {

    public function index()
    {
		$this->load->library('pagination');

   	    //get articles
		$data['articles'] = $this->Article_model->get_articles('id','DESC','10');
				
	    //get menu items
		$data['menu_items'] = $this->Article_model->get_menu_items();
		
		//get images
		$data['images'] = $this->Upload_model->get_images();
			
				
		$this->load->view('home',$data);
				
    }
		
	 public function view($id)
    {
   	    			
	    //get menu items
		$data['menu_items'] = $this->Article_model->get_menu_items();
		
		//get images
		$data['images'] = $this->Upload_model->get_images();
		
		//get single articles
		$data['article'] = $this->Article_model->get_article($id);
		
		$this->load->view('inner',$data);
		
		
    }	
		
}

?>