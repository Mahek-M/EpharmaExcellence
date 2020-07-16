<?php

class Login_Model extends CI_Model
{ 
	
	public function insert_form($subjectdata){
		if ($this->db->insert("form483", $subjectdata)) {
            return true;
        }
	}
	public function add_remark($subjectdata){
		if ($this->db->insert("remark", $subjectdata)) {
            return true;
        }
	}
	public function add_signup($subjectdata){
		if ($this->db->insert("user", $subjectdata)) {
            return true;
        }
	}
	
	public function add_ads($subjectdata){
		if ($this->db->insert("ads_with_us", $subjectdata)) {
            return true;
        }
	}
	public function insert_inspector($subjectdata){
		if ($this->db->insert("inspector_details", $subjectdata)) {
            return true;
        }
	}
	
	public function add_ques($subjectdata){
		if ($this->db->insert("your_questions", $subjectdata)) {
            return true;
        }
	}
	public function add_blog($subjectdata){
		if ($this->db->insert("guest_blog", $subjectdata)) {
            return true;
        }
	}
	
	public function getcname($id){
		$this->db->select('*');
        $this->db->from('company');
		$this->db->where('id',$id);
        $query = $this->db->get();
        $result = $query->row();
		return $result->company_name;
	}
	public function getcat($id){
		$this->db->select('*');
        $this->db->from('category_subcategory');
		$this->db->where('id',$id);
        $query = $this->db->get();
        $result = $query->row();
		if(!empty($result)){
			return $result->name;
		}else{
			return '-';
		}
	}
	public function getallFormDatabyid($id,$inspector_id){
		$where = "CONCAT(',',inspector,',') LIKE CONCAT('%,',$inspector_id,',%')";
		$this->db->select('*');
        $this->db->from('form483');
		$this->db->where('category_sub',$id);
		$this->db->where($where);
        $query = $this->db->get();
        $result = $query->result();
		return $result;
	}
	public function getallFormDataby_year($id,$inspector_id,$year){
		$where = "CONCAT(',',inspector,',') LIKE CONCAT('%,',$inspector_id,',%')";
		$this->db->select('*');
        $this->db->from('form483');
		$this->db->where('category_sub',$id);
		$this->db->where('year',$year);
		$this->db->where($where);
        $query = $this->db->get();
        $result = $query->result();
		return $result;
	}
	public function getinspector($id){
		$this->db->select('*');
        $this->db->from('inspector');
		$this->db->where('id',$id);
        $query = $this->db->get();
        $result = $query->row();
		return $result->name;
	}
	public function login($data)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('phone',$data['phone']);
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
	public function read_user_information($phone)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('phone',$phone);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	public function get_words($sentence, $count = 30) {
	  preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
	  return $matches[0].'...';
	}
	public function No_of_observation($cid,$isid){
		$where = "CONCAT(',',inspector,',') LIKE CONCAT('%,',$isid,',%') AND category_sub = $cid ";
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		//$this->db->group_by('category_sub');
		$query = $this->db->get();
		$data['form483'] = $query->result();
		return count($data['form483']);
	}
	public function No_of_observation_2018($cid,$isid){
		$where = "CONCAT(',',inspector,',') LIKE CONCAT('%,',$isid,',%') AND category_sub = $cid ";
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		//$this->db->group_by('category_sub');
		$this->db->where('year','2018');
		$query = $this->db->get();
		$data['form483'] = $query->result();
		return count($data['form483']);
	}
	public function No_of_observation_2019($cid,$isid){
		$where = "CONCAT(',',inspector,',') LIKE CONCAT('%,',$isid,',%') AND category_sub = $cid ";
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		//$this->db->group_by('category_sub');
		$this->db->where('year','2019');
		$query = $this->db->get();
		$data['form483'] = $query->result();
		return count($data['form483']);
	}
}
?>