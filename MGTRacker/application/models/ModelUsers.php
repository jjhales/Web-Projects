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
	public function profile_view(){
		$data = $this->session->userdata('username');
		$sql = "SELECT * FROM customers WHERE customers.username = ?";
		$query = $this->db->query($sql, $data);	
		return $query->result();
	}
	public function employees(){
		$data = $this->session->userdata('company');
		$sql = "SELECT * FROM customers WHERE customers.userType = 'employee' AND customers.customerCompany = ?";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function customers(){
		$data = $this->session->userdata('company');
		$sql = "SELECT * FROM customers WHERE customers.userType = 'customer' AND customers.customerCompany = ?";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function allUsers(){
		$sql = "SELECT * FROM customers";
		$query = $this->db->query($sql);
		return $query->result();
	}
}//close model
