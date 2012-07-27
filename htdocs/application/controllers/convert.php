<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Convert extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	function index()
	{
		$this->load->view('convert_view');
	}
	
	function twisttodh()
	{
		$this->form_validation->set_rules('Twist1', 'Twist1', 'required');
		$this->form_validation->set_rules('Twist2', 'Twist2', 'required');
		$this->form_validation->set_rules('Twist3', 'Twist3', 'required');
		$this->form_validation->set_rules('Endpoint', 'Endpoint', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$data['from'] = 'twist';
			$this->load->view('convert_view', $data);	
		}
		else{
			$twist1 = $this->input->post('Twist1');
			$twist2 = $this->input->post('Twist2');
			$twist3 = $this->input->post('Twist3');
			$endpoint = $this->input->post('endpoint');
			
			
				
			$data['DOK'] = 'True';
			$data['TOK'] = NULL;
			$data['DH'] = array('value1','value2','value3');
		
		//	$Tresult = NULL; 
	
			$this->load->view('convert_view', $data);
		}	
	}
	
	function dhtotwist()
	{
		$this->form_validation->set_rules('1st_set', '1st_set', 'required');
		$this->form_validation->set_rules('2nd_set', '2nd_set', 'required');
		$this->form_validation->set_rules('3rd_set', '3rd_set', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$data['from'] = 'dh';
			$this->load->view('convert_view',$data);	
		}
		else{
		
			$data['TOK'] = 'True';
			$data['DOK'] = NULL;
			$data['twist'] = array('value1','value2','value3');
			$data['endpoint'] = 'something';
		
		//	$Tresult = NULL; 
	
			$this->load->view('convert_view', $data);
		}
	}
}