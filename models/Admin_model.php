<?php

class Admin_Model extends CI_Model
{ 
	
	public function login($data)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		//$this->db->where('user_id','1');
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	public function read_user_information($username)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	public function add_news($subjectdata){
		if ($this->db->insert("news", $subjectdata)) {
            return true;
        }
	}
	public function add_blogs($subjectdata){
		if ($this->db->insert("blogs", $subjectdata)) {
            return true;
        }
	}
	public function add_affairs($subjectdata){
		if ($this->db->insert("current_affairs", $subjectdata)) {
            return true;
        }
	}
	public function add_casestudy($subjectdata){
		if ($this->db->insert("case_studies", $subjectdata)) {
            return true;
        }
	}
	public function getcompanyYear($year){
		$this->db->select('*');
        $this->db->from('form483');
		$this->db->where('year',$year);
		$this->db->group_by('company_name');
        $query = $this->db->get();
        $result = $query->result();
		return $result;
	}
	public function getyearCategory($company){
		$this->db->select('*');
        $this->db->from('form483');
		$this->db->where('company_name',$company);
		$this->db->group_by('category');
        $query = $this->db->get();
        $result = $query->result();
		return $result;
	}
	public function getcatSubcategory($cat){
		$this->db->select('*');
        $this->db->from('form483');
		$this->db->where('category',$cat);
		$this->db->group_by('category_sub');
        $query = $this->db->get();
        $result = $query->result();
		return $result;
	}
	public function getsubcategoryInspector($sid){
		$this->db->select('*');
        $this->db->from('form483');
		$this->db->where('category_sub',$sid);
		$this->db->group_by('inspector');
        $query = $this->db->get();
        $result = $query->result();
		return $result;
	}
	public function getcompanyName($cid){
		$this->db->select('*');
        $this->db->from('company');
		$this->db->where('id',$cid);
        $query = $this->db->get();
        $result = $query->row();
		return $result->company_name;
	}
	
	public function getcatName($cid){
		$this->db->select('*');
        $this->db->from('category');
		$this->db->where('id',$cid);
        $query = $this->db->get();
        $result = $query->row();
		return $result->name;
	}
	public function getsubcatName($cid){
		$this->db->select('*');
        $this->db->from('category_subcategory');
		$this->db->where('id',$cid);
        $query = $this->db->get();
        $result = $query->row();
		return $result->name;
	}
	public function getallsubcat(){
		$this->db->select('*');
        $this->db->from('category_subcategory');
        $query = $this->db->get();
        $result = $query->result();
		return $result;
	}
	public function getallinspector(){
		$this->db->select('*');
        $this->db->from('inspector');
        $query = $this->db->get();
        $result = $query->result();
		return $result;
	}
	
}
?>