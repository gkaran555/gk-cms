<?php

class Upload extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		//access control
		if(!$this->session->userdata('logged_in'))
			redirect('admin/provera/login');
		
	}
					
		function index()
		{
		$this->load->view('admin/images/upload_form', array('error' => ' ' ));
		}
		
		
		function do_upload()
		{
		if($this->input->post('upload'))
		{
			$config['upload_path'] = './public/img';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']    = '1024';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/images/upload_form', $error);
			}
			else
			{
				$data=$this->upload->data();
				$this->thumb($data);
				$file=array(
				'name'=>$data['raw_name'].'_thumb'.$data['file_ext'],
				);
				
				$this->Upload_model->add_image($file);
				$data = array('upload_data' => $this->upload->data());
				$this->load->view('admin/images/upload_success', $data);
				
			}
		}
		else
		{
		redirect(site_url('upload'));
		}
		}
		
		
		function thumb($data)
		{
			$config['image_library'] = 'gd2';
			$config['source_image'] =$data['full_path'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 275;
			$config['height'] = 250;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
		}

}