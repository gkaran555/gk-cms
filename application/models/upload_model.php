<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Upload_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	function add_image($data){
		$this->db->insert('images',$data);
	}
	
	public function get_images(){
        $query = $this->db->get('images');
        return $query->result();
    }
	
	public function delete_image($id){
	$this->db->where('id', $id);	
	$this->db->delete('images');
	return true;
	}
	
	}