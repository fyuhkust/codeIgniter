<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_pag extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		
		
	}


	function index()
	{
		$config['base_url'] = 'http://localhost/index.php/site_pag';
		$config['total_rows'] = $this->db->get('data')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 20;
		$this->pagination->initialize($config);
		$data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3));
		
		$this->load->view('site_pag_view',$data);
		
	}
}