<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('login_model');
		$this->load->library('Password_encryption'); 
    }

	public function index()
	{
		if(isset($this->session->userdata['service_user'])){
			redirect('dashboard','');
		}
		else
		{
			$this->load->view('login');
		}
		
	}

	public function checklogin()
	{
		$password = $this->password_encryption->encrypt($this->input->post('password')); 
		$data = array(
				'username' => $this->input->post('username'),
				'password' => $password
			);
		
		$result = $this->login_model->login($data);
			
		if ($result == TRUE)
			{
				$username = $this->input->post('username');
				$result = $this->login_model->read_user_information($username);
					if ($result != false)
					{
						$session_data = array(
							'email' => $result[0]->email,
							'first_name' => $result[0]->first_name,
							'last_name' => $result[0]->last_name,
							'password' => $result[0]->password,
							'id' => $result[0]->id
						);
						//print_r($session_data);
						/* Add user data in session */
						$this->session->set_userdata('service_user', $session_data);
						$this->session->set_flashdata('success', 'You have logged in successfully.');
						redirect('dashboard','');
					}else{
						$this->session->set_flashdata('error', 'This account has been blocked. Please contact support for more assistance.');
						redirect('login','');
					}
			}
			else 
			{
				$this->session->set_flashdata('error', 'The email ID and password you entered did not match our records. Please double-check and try again.');
				redirect('login','');
			}
	}
	public function checkemail(){
		$email = $this->input->post('email');
		$aa = $this->login_model->checkemail($email);
		if(!empty($aa)){
			echo 'exist';
		}
		else{
			echo 'not exist';
		}
	}
}
