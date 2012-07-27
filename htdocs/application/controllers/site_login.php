<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}


	function members_area()
	{
		$data['name'] = $this->session->userdata('username');
		$this->load->view('membership_area',);
	}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		//echo $is_logged_in;
		
		if(!isset($is_logged_in) || $is_logged_in != TRUE)
		{
			echo 'you don\'t have permission <a href="../login">Login</a>';
			die();
		}
	}
}