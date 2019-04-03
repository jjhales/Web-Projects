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
		$sql = "SELECT customers.customerFName, customers.customerLName, customers.customerCompany, customers.customerPhone, customers.CustomerEmail FROM customers WHERE customers.username = ?";
		$query = $this->db->query($sql, $data);	
		return $query->result();
	}
	public function employees(){
		$data = $this->session->userdata('company');
		$sql = "SELECT customers.customerFName, customers.customerLName, customers.customerPhone, customers.CustomerEmail, customers.usertype FROM customers WHERE customers.userType = 'employee' AND customers.customerCompany = ?";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function customers(){
		$data = $this->session->userdata('company');
		$sql = "SELECT customers.customerFName, customers.customerLName, customers.customerPhone, customers.CustomerEmail, customers.usertype, customers.customerNews FROM customers WHERE customers.userType = 'customer' AND customers.customerCompany = ?";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function allUsers(){
		$sql = "SELECT customers.customerFName, customers.customerLName, customers.customerPhone, customers.CustomerEmail, customers.usertype, customers.customerCompany, customers.username FROM customers";
		$query = $this->db->query($sql);
		return $query->result();
	}
}//close model
