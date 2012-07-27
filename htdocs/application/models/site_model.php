<?php 

class Site_Model extends CI_Model {
	
	function get_records(){
		$query = $this->db->get('data');	
		return $query->result();
	}
	
	function add_record($data)
	{
		$this->db->insert('data', $data);
		return;
	}

	function update_record($data)
	{
		$this->db->where('id', 1);
		$this->db->update('data', $data);
		return;
	}

	function delete_record()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('data');
		return;
	}

}