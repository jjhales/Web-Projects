<?php

class ModelUsers extends CI_Model{
	// checks post data from form and if found return true if not false
	public function can_log_in()
	{
		$this->db->where('username', $this->input->post('username'));
		$query = $this->db->get('customers');
		
		if ($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}//close can_log_in
}//close model
