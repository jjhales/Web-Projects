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
		return $query->result();
	}
	// queries db for client hours remaining and hours worked matched client id and service id and updates new client hours remaining
	public function update_hours_remain(){
		//query for client id and service id plus hours remain and hours worked
		$query = $this->db->query('SELECT employee_hours.client_id, employee_hours.service_id, client_hours.hours_remain, employee_hours.hours_worked FROM employee_hours JOIN client_hours on client_hours.service_id = employee_hours.service_id WHERE client_hours.client_id = employee_hours.client_id');
		//store query result in my data
		$mydata = $query->result();
		//foreach to grab data array and create new hours to
		foreach ($mydata as $row)
		{
			$client_id = $row->client_id;
			$service_id = $row->service_id;
			$new_hours = $row->hours_remain - $row->hours_worked;
		};
		// data array of new hours, client id, and service id
		$sql_data = array('hours_remain' => $new_hours, 'client_id' => $client_id, 'service_id' => $service_id);
		// sql query to update client hours remain matches client id and service id
		$sql = "UPDATE client_hours SET hours_remain = ? WHERE client_id = ? AND service_id = ?";
		$query = $this->db->query($sql, $sql_data);
	}


	
		
	//update hours remain upon insertion of hours_worked 
	//match to service and client id when hours_worked inserted 
	// hours remain - hours worked

}//close model
