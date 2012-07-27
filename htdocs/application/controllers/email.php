<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		//echo "I am here";
		$this->load->view('newsletter_view');	
	}

	function testing(){
		$this->load->library('form_validation');
		
		// field name, error message
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('newsletter_view');	
		}
		else{
			echo "Passed";
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			
			echo $name. '\n';
			echo $email . '\n';
		}
		
	}
	
	function send()
	{
		// in the email guide in the config file
		
		
		//$this->load->library('email', $config); // could also be done using autoload config file
		
		$this->email->set_newline("\r\n");
		$this->email->from('yufei.flyingfish@gmail.com', 'Fei YU');
		$this->email->to('yufei.flyingfish@gmail.com', 'Billy');
		$this->email->subject('It is a testing');
		$this->email->message('Second Testing');
		
		$path = $this->config->item('server_root');
		$file = $path.'/attachments/yourinfo.txt';
		
		$this->email->attach($file);
		
		
		if($this->email->send())
		{
			echo "Email is sent Successfully ";
			
		}
		else
		{
			show_error($this->email->print_debugger());
		}
	}
}
