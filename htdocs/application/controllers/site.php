<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}


	function index()
	{	
		$data = array();
		
		if($query = $this->site_model->get_records())
		{
			$data['records'] = $query;
		}
		
		$this->load->view('option_view', $data);
	}
	
	function create()
	{
		//echo $this->input->post('title');
		$data = array (
			'title' => $this->input->post('title'),
			'comments' => $this->input->post('comments')
		);
		
		$this->site_model->add_record($data);
		$this->index(); // call the function of index to reload option_view
	}
	
	function delete()
	{
		$this->site_model->delete_record();
		$this->index();
	}
	
	function update()
	{
		$data = array(
			'title'=> 'My Freshly Updated Title',
			'comments' => 'Content is here'
		);
		
		$this->site_model->update_record($data);
		$this->index();
		
	}
	
	
}