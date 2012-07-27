<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
	}


	function index()
	{
		$data['title'] = "My Blog Title";
		$data['heading'] = "My Blog Heading";
		$data['query'] = $this->db->get('entries');
		//$data['todo'] = array('First thing', 'second thing', 'Third thing');
		
		$this->load->view('blog_view',$data);
	}
	
	function comments()
	{		
		$data['title'] = "My Comment Title";
		$data['heading'] = "My Comment Heading";
		$this->db->where('entry_id', $this->uri->segment(3));
		$data['query'] = $this->db->get('comments');
		
		$this->load->view('comments_view',$data);
	}
	
	function comment_insert()
	{
		$this->db->insert('comments',$_POST);
		
		redirect('blog/comments/'.$_POST['entry_id']);
	}
}



?>