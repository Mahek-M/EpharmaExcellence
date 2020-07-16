<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
    {
        parent::__construct();
		$this->load->model('login_model');
		$this->load->library('Password_encryption'); 
    }
	public function index()
	{	
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Home';
		$this->db->select("*");
		$this->db->from('news');
		$this->db->order_by('date','desc');
		$query = $this->db->get();
		$data['news'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['blogs'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('current_affairs');
		$query = $this->db->get();
		$this->db->order_by('id','desc');
		$data['current_affairs1'] = $query->result();
		//print_R($data['current_affairs']);die;
		$this->db->select("*");
		$this->db->from('case_studies');
		$query = $this->db->get();
		$this->db->order_by('id','desc');
		$data['case_studies'] = $query->result();
		$this->load->view('frontend/index',$data);
		
	}
	public function new_list(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'News List';
		$this->db->select("*");
		$this->db->from('news');
		$this->db->order_by('date','desc');
		$query = $this->db->get();
		$data['news'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['blogs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('current_affairs');
		$this->db->order_by('id','desc');
		$this->db->limit(1);
		$query = $this->db->get();
		$data['current_affairs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('case_studies');
		$query = $this->db->get();
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$data['case_studies'] = $query->row();
		
		$this->load->view('frontend/news_list',$data);
	}
	public function news(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'News';
		$id = $this->uri->segment(2);
		$this->db->select("*");
		$this->db->from('news');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['news'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('news');
		$this->db->where('id!=',$id);
		$this->db->order_by('date','desc');
		$query = $this->db->get();
		$data['news_list'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['blogs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('current_affairs');
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['current_affairs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('case_studies');
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['case_studies'] = $query->row();
		
		$this->load->view('frontend/news_details',$data);
	}
	public function blogs_list(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Blogs List';
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['blogs'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('news');
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['news'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('current_affairs');
		$this->db->limit(1);
		$query = $this->db->get();
		$this->db->order_by('id','desc');
		$data['current_affairs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('case_studies');
		$query = $this->db->get();
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$data['case_studies'] = $query->row();
		
		$this->load->view('frontend/blogs_list',$data);
	}
	public function blogs(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Blogs';
		$id = $this->uri->segment(2);
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['blogs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->where('id!=',$id);
		$query = $this->db->get();
		$data['blogs_list'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('news');
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['news'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('current_affairs');
		$this->db->limit(1);
		$query = $this->db->get();
		$this->db->order_by('id','desc');
		$data['current_affairs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('case_studies');
		$query = $this->db->get();
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$data['case_studies'] = $query->row();
		
		
		$this->load->view('frontend/blogs_details',$data);
	}
	public function affairs_list(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Blogs List';
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['blogs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('news');
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['news'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('current_affairs');
		$query = $this->db->get();
		$this->db->order_by('id','desc');
		$data['current_affairs'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('case_studies');
		$query = $this->db->get();
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$data['case_studies'] = $query->row();
		
		$this->load->view('frontend/current_affairs_list',$data);
	}
	public function current_affairs(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Current Affairs';
		$id = $this->uri->segment(2);
		$this->db->select("*");
		$this->db->from('current_affairs');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['cuurent_aff'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['blogs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('news');
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['news'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('case_studies');
		$query = $this->db->get();
		$this->db->limit(1);
		$this->db->order_by('id','desc');
		$data['case_studies'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('current_affairs');
		$this->db->where('id!=',$id);
		$query = $this->db->get();
		$data['current_affairs_list'] = $query->result();
		
		$this->load->view('frontend/current_affairs_details',$data);
	}
	public function casestudy_list(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Case study List';
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['blogs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('news');
		$this->db->limit(1);
		$query = $this->db->get();
		$data['news'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('current_affairs');
		$this->db->limit(1);
		$query = $this->db->get();
		$this->db->order_by('id','desc');
		$data['current_affairs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('case_studies');
		$query = $this->db->get();
		$this->db->order_by('id','desc');		
		$data['case_studies'] = $query->result();
		
		$this->load->view('frontend/casestudy_list',$data);
	}
	public function case_study(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Current Affairs';
		$id = $this->uri->segment(2);
		$this->db->select("*");
		$this->db->from('case_studies');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['case_studies'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('blogs');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$data['blogs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('news');
		$this->db->limit(1);
		$query = $this->db->get();
		$data['news'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('current_affairs');
		$this->db->limit(1);
		$query = $this->db->get();
		$this->db->order_by('id','desc');
		$data['current_affairs'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('case_studies');
		$this->db->where('id!=',$id);
		$query = $this->db->get();
		$data['case_studies_list'] = $query->result();
		
		
		$this->load->view('frontend/case_study_details',$data);
	}
	public function career(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Career';
		$this->load->view('frontend/career',$data);
	}
	public function youtube(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'YouTube';
		$this->load->view('frontend/youtube',$data);
	}
	public function signup(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Signup';
		$this->load->view('frontend/signup',$data);
	}
	public function login(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Login';
		$this->load->view('frontend/login',$data);
	}
	
	public function guest_blog(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Guest Blog';
		$this->db->select("*");
		$this->db->from('guest_blog');
		$query = $this->db->get();
		$data['blogs'] = $query->result();
		$this->load->view('frontend/guest_blog',$data);
	}
	public function guest_blog_details(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Guest Blog Details';
		$id = $this->uri->segment(2);
		$this->db->select("*");
		$this->db->from('guest_blog');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['blogs'] = $query->row();
		
		$this->load->view('frontend/guest_blog_details',$data);
	}
	public function form483(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Form 483';
		$this->db->select("*");
		$this->db->from('company');
		$query = $this->db->get();
		$data['company'] = $query->result();
		
		
		$this->db->select("*");
		$this->db->from('category');
		$query = $this->db->get();
		$data['category'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('category_subcategory');
		$query = $this->db->get();
		$data['category_subcategory'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('inspector');
		$query = $this->db->get();
		$data['inspector'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->limit(30);
		$query = $this->db->get();
		$data['form483'] = $query->result();
		
		$this->load->view('frontend/form483',$data);
	}
	public function searchform483(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'SearchForm 483';
		
		$company = $this->input->post('company');
		$year = $this->input->post('year');
		$cat = $this->input->post('cat');
		$subcat = $this->input->post('subcat');
		$inspector = $this->input->post('inspector');
		
		$this->db->select("*");
		$this->db->from('company');
		$query = $this->db->get();
		$data['company'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('category');
		$query = $this->db->get();
		$data['category'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('category_subcategory');
		$query = $this->db->get();
		$data['category_subcategory'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('inspector');
		$query = $this->db->get();
		$data['inspector'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		if(!empty($company) && $company != 'all'){
			$this->db->where('company_name',$company);
		}
		if(!empty($year) && $year != 'all'){
			$this->db->where('year',$year);
		}
		if(!empty($subcat) && $subcat != 'all'){
			$this->db->where('category_sub',$subcat);
		}
		if(!empty($cat) && $cat != 'all'){
			$this->db->where('category',$cat);
		}
		if(!empty($inspector) && $inspector != 'all'){
			$where = "CONCAT(',',inspector,',') LIKE CONCAT('%,',$inspector,',%')";
			$this->db->where($where);
		}		
		$query = $this->db->get();
		$data['form483'] = $query->result();
		//echo $this->db->last_query();
		$this->load->view('frontend/search_form483',$data);
	}
	public function form483_details(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Form483 Details';
		
		$id = $this->uri->segment(2);
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['form483'] = $query->row();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where('fei',$data['form483']->fei);
		$query = $this->db->get();
		$data['fromfei'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where('company_name',$data['form483']->company_name);
		$query = $this->db->get();
		$data['company_form483'] = $query->result();
		$data['cname'] = $this->login_model->getcat($data['form483']->category_sub);
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where('category_sub',$data['form483']->category_sub);
		$query = $this->db->get();
		$data['fromcat'] = $query->result();
		
		$inspector = $data['form483']->inspector;
		
			
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where_in('inspector',$inspector);
		$query = $this->db->get();
		$data['frominspector'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('remark');
		$this->db->where('obid',$id);
		$query = $this->db->get();
		$data['remark'] = $query->result();
		
		$this->load->view('frontend/form483_details',$data);
	}
	public function add_form(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Add Form';
		
		$this->db->select("*");
		$this->db->from('company');
		$query = $this->db->get();
		$data['company'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('category_subcategory');
		$query = $this->db->get();
		$data['category_subcategory'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('category');
		$query = $this->db->get();
		$data['category'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('inspector');
		$query = $this->db->get();
		$data['inspector'] = $query->result();
		
		$this->load->view('frontend/add_form',$data);
	}
	public function add_inspector(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Add inspector';
		
		
		$this->db->select("*");
		$this->db->from('inspector');
		$query = $this->db->get();
		$data['inspector'] = $query->result();
		
		$this->load->view('frontend/add_inspector',$data);
	}
	public function company_details(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Company Details';
		$id = $this->uri->segment(2);
		$data['cname'] = $this->login_model->getcname($id);
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where('company_name',$id);
		$query = $this->db->get();
		$data['form483'] = $query->result();
		
		$this->load->view('frontend/company_details',$data);
	}
	public function category_details(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Category Details';
		$id = $this->uri->segment(2);
		$data['cname'] = $this->login_model->getcat($id);
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where('category_sub',$id);
		$query = $this->db->get();
		$data['form483'] = $query->result();
		
		$this->load->view('frontend/category_related',$data);
	}
	public function category_page(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Category Details';
		$id = $this->uri->segment(2);
		$inspector = $this->uri->segment(3);
		$data['cname'] = $this->login_model->getcat($id);
		$where = "CONCAT(',',inspector,',') LIKE CONCAT('%,',$inspector,',%') AND category_sub=$id";
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$query = $this->db->get();
		$data['form483'] = $query->result();
		
		$this->load->view('frontend/category_page',$data);
	}
	public function fei_details(){
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$data['title'] = 'Fei Details';
		$id = $this->uri->segment(2);
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where('fei',$id);
		$query = $this->db->get();
		$data['form483'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where('fei',$id);
		$query = $this->db->get();
		$data['form483_details'] = $query->row();
		
		$this->load->view('frontend/fei_details',$data);
	}
	
	public function insert_form(){
		/*print_r($_POST);
		echo $this->input->post('company_name');
		die;*/
		if(!empty($_FILES['file_name']['name']))
			{
			
				$config['upload_path']   = './uploads'; 
				$config['allowed_types'] = '*';
				$config['max_size']      = '10000000000000';
				$config['overwrite']     = FALSE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if(!$this->upload->do_upload('file_name'))
				{
					$error = array('error' => $this->upload->display_errors());	
				}
				else
				{
				}
				$image =  $_FILES['file_name']['name'];
			}
			else
			{
				$image = '';
			}
			if(!empty($_FILES['pdf_name']['name']))
			{
			
				$config['upload_path']   = './uploads'; 
				$config['allowed_types'] = '*';
				$config['max_size']      = '10000000000000';
				$config['overwrite']     = FALSE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if(!$this->upload->do_upload('pdf_name'))
				{
					$error = array('error' => $this->upload->display_errors());	
				}
				else
				{
				}
				$pdf_name =  $_FILES['pdf_name']['name'];
			}
			else
			{
				$pdf_name = '';
			}
			$Listinspector = implode(',', $this->input->post('inspector')); 
			$edata = array(
			
								'file_name' => $image,
								'pdf_name' => $pdf_name,
								'company_name' => $this->input->post('company_name'),
								'date' => $this->input->post('date'),
								'year' => $this->input->post('year'),
								'category' => $this->input->post('category'),
								'category_sub' => $this->input->post('category_sub'),
								'inspector' => $Listinspector,
								'observation' => $this->input->post('observation'),
								'fei' => $this->input->post('fei'),
								'firm_name' => $this->input->post('firm_name'),
								'address' => $this->input->post('address'),
								'location' => $this->input->post('location'),
								'name_title' => $this->input->post('name_title'),
								'date_of_inspection' => $this->input->post('date_of_inspection'),
								'type_of_es' => $this->input->post('type_of_es')
							);
							
			$subject_result = $this->login_model->insert_form($edata);
			redirect('home/add_form');
			
	}
	public function insert_inspector(){
		if(!empty($_FILES['image']['name']))
			{
			
				$config['upload_path']   = './uploads/inspector'; 
				$config['allowed_types'] = '*';
				$config['max_size']      = '10000000000000';
				$config['overwrite']     = FALSE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if(!$this->upload->do_upload('image'))
				{
					$error = array('error' => $this->upload->display_errors());	
				}
				else
				{
				}
				$image =  $_FILES['image']['name'];
			}
			else
			{
				$image = '';
			}
			$edata = array(
			
								'image' => $image,
								'inspector_id' => $this->input->post('inspector_id'),
								'title' => $this->input->post('title'),
								'email_id' => $this->input->post('email_id'),
								'phone' => $this->input->post('phone'),
								'address' => $this->input->post('address'),
								'fb' => $this->input->post('fb'),
								'linkdin' => $this->input->post('linkdin'),
								'reference' => $this->input->post('reference'),
								'working_since' => $this->input->post('working_since'),
								'country' => $this->input->post('country'),
								'total_483' => $this->input->post('total_483'),
								'type_of_obbservation' => $this->input->post('type_of_obbservation')
							);
							
			$subject_result = $this->login_model->insert_inspector($edata);
			redirect('home/add_inspector');
			
	}
	
	public function add_remark(){
		$id = $this->input->post('id');
		$edata = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'description' => $this->input->post('description'),
				'obid' => $this->input->post('id')
			);
		$subject_result = $this->login_model->add_remark($edata);
		redirect('form483-details/'.$id);
	}
	public function add_adswithus(){
		$edata = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'company' => $this->input->post('company'),
				'product' => $this->input->post('product'),
				'address' => $this->input->post('address'),
				'remark' => $this->input->post('remark')
			);
		$subject_result = $this->login_model->add_ads($edata);
		$this->session->set_flashdata('success', 'Your Ads is submit and we will contact you soon!');
		redirect('');
	}
	public function add_your_questions(){
		$edata = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'question' => $this->input->post('question'),
				'remark' => $this->input->post('remark')
			);
		$subject_result = $this->login_model->add_ques($edata);
		$this->session->set_flashdata('success', 'Your Question is submited and we will get back to you soon!');
		redirect('');
	}
	public function register(){
		 $ip = $this->input->ip_address();
		$edata = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'password' => $this->input->post('password'),
				'ip_address' =>  $ip ,
				'device' => '',
				'status' => 0
			);
		$subject_result = $this->login_model->add_signup($edata);
		$this->session->set_flashdata('success', 'You are register successfully!');
		redirect('login');
	}
	public function add_blog(){
		if(!empty($_FILES['image']['name']))
			{
			
				$config['upload_path']   = './uploads/blog'; 
				$config['allowed_types'] = '*';
				$config['max_size']      = '10000000000000';
				$config['overwrite']     = FALSE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if(!$this->upload->do_upload('image'))
				{
					$error = array('error' => $this->upload->display_errors());	
				}
				else
				{
				}
				$image =  $_FILES['image']['name'];
			}
			else
			{
				$image = '';
			}
		$edata = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'website' => $this->input->post('website'),
				'blog_title' => $this->input->post('blog_title'),
				'image' => $image,
				'description' => $this->input->post('description')
			);
		$subject_result = $this->login_model->add_blog($edata);
		$this->session->set_flashdata('success', 'Your Blog is submitted successfully!');
		redirect('guest-blog');
	}
	public function inspector(){
		$id = $this->uri->segment(2);
		//echo $id;
		$data['isid'] = $this->uri->segment(2);
		if(isset($this->session->userdata['service_user'])){
			$sessionarray = $this->session->userdata('service_user');
			$data['service_data'] = $sessionarray;
		}
		$this->db->select("*");
		$this->db->from('inspector_details');
		$this->db->where('inspector_id',$id);
		$query = $this->db->get();
		$data['inspector'] = $query->row();
		
		
		$where = "CONCAT(',',inspector,',') LIKE CONCAT('%,',$id,',%')";
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->group_by('category_sub');
		$this->db->where($where);
		$query = $this->db->get();
		$data['form483'] = $query->result();
		//echo $this->db->last_query();
		
		/*$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$this->db->order_by('date','asc');
		$query = $this->db->get();
		$data['form483_all'] = $query->result();*/
		
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$this->db->group_by('category_sub');
		$this->db->order_by('date','asc');
		$query = $this->db->get();
		$data['form483_all'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$this->db->group_by('pdf_name');
		$this->db->order_by('date','asc');
		$query = $this->db->get();
		$data['total_483'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$this->db->where('year','2018');
		$this->db->group_by('pdf_name');
		$this->db->order_by('date','asc');
		$query = $this->db->get();
		$data['total_483_2018'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$this->db->where('year','2019');
		$this->db->group_by('pdf_name');
		$this->db->order_by('date','asc');
		$query = $this->db->get();
		$data['total_483_2019'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$this->db->group_by('category_sub');
		$this->db->where('year','2018');
		$query = $this->db->get();
		$data['form483_2018'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$this->db->group_by('category_sub');
		$this->db->where('year','2019');
		$query = $this->db->get();
		$data['form483_2019'] = $query->result();
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$this->db->group_by('category_sub');
		$query = $this->db->get();
		$data['cat_subcat_inspector'] = $query->result();
		
		$data['title'] = 'Inspector Profile';
		$this->load->view('frontend/inspector_profile',$data);
		
	}
	public function getbarchat_data(){
		$id = $this->input->post('inspector');
		$where = "CONCAT(',',inspector,',') LIKE CONCAT('%,',$id,',%')";
		
		$this->db->select("*");
		$this->db->from('form483');
		$this->db->where($where);
		$this->db->group_by('category_sub');
		$query = $this->db->get();
		$data['cat_subcat_inspector'] = $query->result();
		if(!empty($data['cat_subcat_inspector']))
		{
			foreach($data['cat_subcat_inspector'] as $catdata_in){
				$cat_sub[] = $this->login_model->getcat($catdata_in->category_sub);
				$total[] = count($this->login_model->getallFormDatabyid($catdata_in->category_sub,$id));
				$year2018[] = count($this->login_model->getallFormDataby_year($catdata_in->category_sub,$id,2018));
				$year2019[] = count($this->login_model->getallFormDataby_year($catdata_in->category_sub,$id,2019));
			}
			$this->output->set_content_type('application/json');
        	$this->output->set_output(json_encode(array('category-subcategory'=>$cat_sub,'total'=>$total,'2018'=>$year2018,'2019'=>$year2019)));
		}	
	}
	public function loginuser(){
		$data = array(
				'phone' => $this->input->post('phone'),
				'password' => $this->input->post('password')
			);
			
		$result = $this->login_model->login($data);
		if ($result == TRUE)
			{
				$phone = $this->input->post('phone');
				$result = $this->login_model->read_user_information($phone);
					if ($result != false)
					{
						$session_data = array(
							'phone' => $result[0]->phone,
							'password' => $result[0]->password,
							'id' => $result[0]->id
						);
						/* Add user data in session */
						$this->session->set_userdata('service_user', $session_data);
						
						redirect('form483','');
					}
			}
			else 
			{
				$this->session->set_flashdata('error', 'Invalid username and password!');
				redirect('login','');
			}
	}
	public function logout(){
		$this->session->unset_userdata('service_user');
		session_destroy();
		redirect('login','');
	}
	public function getcompany(){
		$this->load->model('admin_model');
		$year = $this->input->post('year');
		$html = '';
		$getcompany = $this->admin_model->getcompanyYear($year);
		//$html .= '<option value="">Company</option>';
		$html .= '<option value="all"></option>';
		if(!empty($getcompany)){
			foreach($getcompany as $company){
				$getcname = $this->admin_model->getcompanyName($company->company_name);
				$html .= '<option value="'.$company->company_name.'">'.$getcname.'</option>';
			}
		}
		echo $html;
	}
	public function getcategory(){
		$this->load->model('admin_model');
		$company = $this->input->post('company');
		$html = '';
		$getcategory = $this->admin_model->getyearCategory($company);
		//$html .= '<option value="">Category</option>';
		$html .= '<option value="all"></option>';
		if(!empty($getcategory)){
			foreach($getcategory as $cat){
				if($cat->category != 0){
					$getcatname = $this->admin_model->getcatName($cat->category);
					$html .= '<option value="'.$cat->category.'">'.$getcatname.'</option>';
				}
			}
		}
		echo $html;
	}
	public function getsubcategory(){
		$this->load->model('admin_model');
		$cat = $this->input->post('cat');
		
		$html = '';
		//$html .= '<option value="">Subcategory</option>';
		$html .= '<option value="all"></option>';
		if($cat == 'all'){
			$getsubcategory = $this->admin_model->getallsubcat();
			if(!empty($getsubcategory)){
				foreach($getsubcategory as $subcat){
					$html .= '<option value="'.$subcat->id.'">'.$subcat->name.'</option>';
				}
			}
		}else{
			$getsubcategory = $this->admin_model->getcatSubcategory($cat);
			if(!empty($getsubcategory)){
				foreach($getsubcategory as $subcat){
					if($subcat->category_sub != 0){
					$getsubcatname = $this->admin_model->getsubcatName($subcat->category_sub);
					$html .= '<option value="'.$subcat->category_sub.'">'.$getsubcatname.'</option>';
					}
				}
			}
		}
		echo $html;
	}
	public function getinspector(){
		$this->load->model('admin_model');
		$subcat = $this->input->post('subcat');
		$html = '';
		//$html .= '<option value="">Inspector</option>';
		$html .= '<option value="all"></option>';
		if($subcat == 'all'){
			$getinspector = $this->admin_model->getallinspector();
			if(!empty($getinspector)){
				foreach($getinspector as $idata){
					$html .= '<option value="'.$idata->id.'">'.$idata->name.'</option>';
				}
			}
		}else{
			$getinspector = $this->admin_model->getsubcategoryInspector($subcat);
			if(!empty($getinspector)){
				foreach($getinspector as $idata){
					if (strpos($idata->inspector, ',') !== false) {
						$aa = explode(",",$idata->inspector);
						for($i=0;$i<count($aa);$i++){
							$iname = $this->login_model->getinspector($aa[$i]);
							$html .= '<option value="'.$aa[$i].'">'.$iname.'</option>';
						}
					}else{
						$iname = $this->login_model->getinspector($idata->inspector);
						$html .= '<option value="'.$idata->inspector.'">'.$iname.'</option>';
					}
				}
			}
		}
		echo $html;
	}
	
}
