<?php 

class Data_model extends CI_Model {
	/*
	function getAll(){
		$q = $this->db->query("SELECT * FROM data");
		if($q->num_rows() > 0){
			foreach ($q->result() as $rows){
				$data [] = $rows;
			}
			
			return $data;
		}
	}
	*/
	/*
	function getAll(){
		$q = $this->db->get('data');
		
		if($q->num_rows() > 0){
			foreach ($q->result() as $rows) {
				$data [] = $rows;
			}
			return $data;
		}
	}
	*/
	/*
	function getAll(){
		$this->db->select('title, comments');
		$q = $this->db->get('data');
		
		if($q->num_rows() > 0){
			foreach ($q->result() as $rows) {
				$data [] = $rows;
			}
			return $data;
		}
		
		*/
		/*
	function getAll(){
		$sql = "SELECT title, author, comments FROM data WHERE id = ? AND author = ?";
		$q = $this->db->query($sql,array(2,'Fei'));
		
			if($q->num_rows() > 0){
				foreach ($q->result() as $rows) {
					$data [] = $rows;
				}
				return $data;
			}
		
	}
	*/
	
	function getALL(){
		$this->db->select('title, comments, pic');
		$this->db->from('data');
		$this->db->where('id',1);
		
		$q = $this->db->get();
		
			if($q->num_rows() > 0){
				foreach ($q->result() as $rows) {
					$data [] = $rows;
				}
				return $data;
			}
		
	}
}