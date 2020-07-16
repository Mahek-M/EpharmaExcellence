<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('Password_encryption'); 
    }

	public function index()
	{
		if(isset($this->session->userdata['service_user'])){
			redirect('admin/dashboard','');
		}
		else
		{
			$this->load->view('admin/login');
		}
		
	}
	public function dashboard()
	{
		if(isset($this->session->userdata['service_admin'])){
			$this->load->view('admin/dashboard');
		}
		else
		{
			//$this->load->view('admin/dashboard');
		}
		
	}
	public function add_new(){
		if(isset($this->session->userdata['service_admin'])){
			$this->load->view('admin/news/add_new');
		}
	}
	public function checklogin(){
		$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			
		$result = $this->admin_model->login($data);
		if ($result == TRUE)
			{
				$username = $this->input->post('username');
				$result = $this->admin_model->read_user_information($username);
					if ($result != false)
					{
						$session_data = array(
							'username' => $result[0]->username,
							'password' => $result[0]->password,
							'id' => $result[0]->id
						);
						/* Add user data in session */
						$this->session->set_userdata('service_admin', $session_data);
						redirect('admin/dashboard');
					}
			}
			else 
			{
				$this->session->set_userdata('ERROR_MESSAGE','Invalid Username OR Password.');
				redirect('admin','');
			}
	}
	public function insert_news(){
		if(!empty($_FILES['image']['name']))
			{
			
				$config['upload_path']   = './uploads'; 
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
		$data = array(
				'title' => $this->input->post('title'),
				'date' => $this->input->post('date'),
				'short_description' => $this->input->post('short_description'),
				'description' => $this->input->post('description'),
				'refrence_link' => $this->input->post('refrence_link'),
				'image' => $image
		);
		if($this->input->post('type') == 'news')
		{
			$this->admin_model->add_news($data);
		}
		if($this->input->post('type') == 'blogs')
		{
			$this->admin_model->add_blogs($data);
		}
		if($this->input->post('type') == 'affairs')
		{
			$this->admin_model->add_affairs($data);
		}
		if($this->input->post('type') == 'casestudy')
		{
			$this->admin_model->add_casestudy($data);
		}
		
		$this->session->set_flashdata('success', 'Your Blog is submitted successfully!');
		redirect('admin/add_new');
	}
	
}
