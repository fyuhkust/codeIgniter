<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}


	function index()
	{
		$data["main_content"] = "login_form_view";
		$this->load->view("includes/template", $data);
	}
	
	function validate_credentials()
	{
		$this->load->model("membership_model");
		$query = $this->membership_model->validate();
		
		if($query) // if sucessful
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => 'true'
			);
			
			$this->session->set_userdata($data);
			redirect('site_login/members_area');
		}
		
		else{
			$this->error();
		}
		
	}
	
	function error()
	{
		echo "Wrong infomation";
		
		$this->index();
	}
	
	function signup()
	{
		$data['main_content'] = 'signup_view';
		$this->load->view('includes/template',$data);
	}
	
	function create_member()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'Name', 'required|trim');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required|trim|valid_email');
		$this->form_validation->set_rules('first_name', 'Name', 'required|trim');
		
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|trim|matches[password]');
		
		if( $this->form_validation->run() == FALSE )
		{
			$this->signup();
		}
		else
		{
			$query = $this->membership_model->create_member();
			if($query)
			{
				$data['main_content'] = 'signup_successful';
				$this->load->view('includes/template', $data);
			}
			else
			{
				$this->load->view('signup_view');
			}
		}
		
		
	}
}