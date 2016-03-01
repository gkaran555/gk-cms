<?php

class Article_model extends CI_Model{
     
    public function get_articles($order_by = null, $sort='DESC', $limit = null, $offset = 0){
        $this->db->select('a.*, b.name as category_name, c.first_name, c.last_name, images.name');
        $this->db->from('articles as a');
        $this->db->join('categories as b','b.id = a.category_id','left');
		$this->db->join('users AS c','c.id = a.user_id','left');
		$this->db->join('images','images.id = a.image_id','left');
        if($limit != null){
            $this->db->limit($limit, $offset);
        } 
		if($order_by != null){
            $this->db->order_by($order_by, $sort);
        } 
        $query = $this->db->get();
        return $query->result();
        
    }
	
	
	public function get_filtered_articles($keywords, $order_by = null, $sort='DESC', $limit = null, $offset = 0){
        $this->db->select('a.*, b.name as category_name, c.first_name, c.last_name, images.name');
        $this->db->from('articles as a');
        $this->db->join('categories as b','b.id = a.category_id','left');
		$this->db->join('users AS c','c.id = a.user_id','left');
		$this->db->join('images','images.id = a.image_id','left');
		$this->db->like('title', $keywords);
		$this->db->or_like('body', $keywords);
        if($limit != null){
            $this->db->limit($limit, $offset);
        } 
		if($order_by != null){
            $this->db->order_by($order_by, $sort);
        } 
        $query = $this->db->get();
        return $query->result();
        
    }
		
	//get single articles
	
	public function get_article($id){
        $this->db->where('id', $id);
        $this->db->order_by('order'); 
        $query = $this->db->get('articles');
        return $query->row();
    }
		
	public function insert($data){
	$this->db->insert('articles', $data);
	return true;
	}
	
	public function update($data, $id){
	$this->db->where('id', $id);	
	$this->db->update('articles', $data);
	return true;
	}
		
	public function publish($id){
		$data = array(             
   				'is_published' => 1
            );
	$this->db->where('id', $id);	
	$this->db->update('articles', $data);
	
	}
	
	public function unpublish($id){
		$data = array(             
   				'is_published' => 0
            );
	$this->db->where('id', $id);	
	$this->db->update('articles', $data);
	
	}
			
	public function delete($id){
	$this->db->where('id', $id);	
	$this->db->delete('articles');
	return true;
	}
	
	//get menu items
	
	public function get_menu_items(){
        $this->db->where('in_menu', 1);
        $this->db->order_by('order'); 
        $query = $this->db->get('articles');
        return $query->result();
    }
	
	//get categories
	
	public function get_categories($order_by = null, $sort='DESC', $limit = null, $offset = 0){
        $this->db->select('*');
        $this->db->from('categories');
        
        if($limit != null){
            $this->db->limit($limit, $offset);
        } 
		if($order_by != null){
            $this->db->order_by($order_by, $sort);
        } 
        $query = $this->db->get();
        return $query->result();
        
    }
	
	public function get_category($id){
        $this->db->where('id', $id);
        $query = $this->db->get('categories');
        return $query->row();
    }
	
	public function insert_category($data){
	$this->db->insert('categories', $data);
	return true;
	}
	
	public function update_category($data, $id){
	$this->db->where('id', $id);	
	$this->db->update('categories', $data);
	return true;
	}
	
	public function delete_category($id){
	$this->db->where('id', $id);	
	$this->db->delete('categories');
	return true;
	}
		
	   
}
