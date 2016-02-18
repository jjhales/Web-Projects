<?php

class Model_users extends CI_Model{
	// checks post data from form and if found return true if not false
	public function can_log_in()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('employee');
		
		if ($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}//close can_log_in

	public function client_hours()
	{
		// add sql query for client hours
		$query = $this->db->query("SELECT client.client_id, client.client_fname, client.client_lname, services.service_name, client_hours.hours_remain FROM client INNER JOIN client_hours on client_hours.client_id = client.client_id INNER JOIN services on services.service_id = client_hours.service_id ORDER BY client.client_id ASC");
		//output query as result
		return $query->result();
	}

	public function client_name()
	{
		//sql query for dropdown client name
		$query = $this->db->query("SELECT client.client_id, client.client_fname, client.client_lname FROM client");
		//output query as result
		return $query->result();

	}
	//matches logged in user to their employee_id db returns array for hidden input on submit hours form
	public function emp_id()
	{
		$data = $this->session->userdata('username');
		$sql = "SELECT employee_id FROM employee WHERE username=?";
		$query = $this->db->query($sql, $data);
		return $query->result();

	}
	//runs query for services dropdown
	public function services(){
		$query = $this->db->query("SELECT service_id, service_name FROM services");
		//output query as result
		return $query->result();
	}

	public function last_10_emp_entries()
	{
		$data = $this->session->userdata('username');
	
		$sql = 'SELECT employee_hours.employee_id, employee.username, employee_hours.client_id, client.client_fname, client.client_lname, employee_hours.date, services.service_name, employee_hours.hours_worked FROM employee_hours INNER JOIN employee on employee.employee_id = employee_hours.employee_id INNER JOIN client on client.client_id = employee_hours.client_id INNER JOIN services on services.service_id = employee_hours.service_id WHERE employee.username = ? ORDER BY employee_hours.date DESC LIMIT 10';
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function calc_pay_entire(){
		$data = $this->session->userdata('username');
		$sql = 'SELECT employee_hours.employee_id, employee.username, employee_hours.date, services.service_name, employee_hours.hours_worked * payrate.pay_rate AS pay FROM employee_hours INNER JOIN employee on employee.employee_id = employee_hours.employee_id INNER JOIN payrate on payrate.employee_id = employee_hours.employee_id AND payrate.service_id = employee_hours.service_id INNER JOIN services on services.service_id = employee_hours.service_id WHERE employee.username = ? ORDER BY employee_hours.date';
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
public function total_pay(){
	$data = $this->session->userdata('username');
	$sql = 'SELECT SUM(employee_hours.hours_worked * payrate.pay_rate) AS pay FROM employee_hours INNER JOIN employee on employee.employee_id = employee_hours.employee_id INNER JOIN payrate on payrate.employee_id = employee_hours.employee_id AND payrate.service_id = employee_hours.service_id INNER JOIN services on services.service_id = employee_hours.service_id WHERE employee.username = ?';
	$query = $this->db->query($sql, $data);
	return $query->result();
}
	
}//close model
