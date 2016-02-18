<?php

class Model_users extends CI_Model{
	// checks post data from form and if found return true if not false
	public function can_log_in()
	{
		
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));

		$query = $this->db->get('gdp_users');
		
		if ($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}//close can_log_in

	public function teams_select(){
		$query = $this->db->query("SELECT teams.team_id, teams.team_location, teams.team_name FROM teams ORDER BY teams.team_location asc");
		return $query->result();
	}
	// queries database for team information for GDP/team_page.php
	public function teams_display(){
		$query = $this->db->query("SELECT teams.team_id, teams.team_logo, teams.team_location, teams.team_name, teams.division FROM teams WHERE teams.team_id < 33 ORDER BY teams.team_location asc");
		return $query->result();
	}
	//query to display profile
	public function profile_display(){
		$data = $this->session->userdata('username');
		$sql = 'SELECT user_id, username, email, team_allegience, admin, teams.team_logo, teams.team_location, teams.team_name FROM gdp_users JOIN teams on gdp_users.team_allegience = teams.team_id WHERE username = ?';
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	//lookup user id
	public function user_id_lookup(){
		$data = $this->session->userdata('username');
		$sql = 'SELECT user_id FROM gdp_users WHERE username=?';
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	//get user groups
	public function user_groups(){
		$data = $this->session->userdata('username');
		$sql = 'SELECT gdp_users.username, group_members.group_name, gdp_users.user_id FROM group_members JOIN gdp_users on gdp_users.user_id = group_members.member JOIN group_name on group_name.group_name = group_members.group_name WHERE username = ?';
		$query = $this->db->query($sql, $data);
		return $query->result();
		
	}
	
	//search for groups
	public function search(){
		$match = $this->input->post('search');
		$this->db->like('group_name',  $match);
		$query = $this->db->get('group_name');
		return $query->result();
	}
	//display group name after clicking group stats button
	public function group_name_display(){
		$data = $this->input->post('group_name');
		$sql = 'SELECT group_name.group_name FROM group_name WHERE group_name = ?';
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	//gather group members
	public function group_members(){
		$data = $this->input->post('group_name');
		$sql = ('SELECT group_members.member, group_members.group_name, gdp_users.user_id, gdp_users.username, group_name.group_leader FROM group_members JOIN gdp_users on group_members.member = gdp_users.user_id JOIN group_name on group_members.group_name = group_name.group_name WHERE group_members.group_name = ?');
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	
	//gather group leader
	public function group_lead(){
		$data = $this->input->post('group_name');
		$sql = ('SELECT group_name.group_name, group_name.group_leader FROM group_name WHERE group_name = ?');
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	//gather group applicants
	public function group_applicants(){
		$data = $this->input->post('group_name');
		$sql = ('SELECT group_name.group_name, temp_group_members.group_name, temp_group_members.member, gdp_users.username, gdp_users.user_id FROM temp_group_members JOIN gdp_users on gdp_users.user_id = temp_group_members.member JOIN group_name on group_name.group_name = temp_group_members.group_name WHERE group_name.group_name=?');
		$query = $this->db->query($sql, $data);
		return $query->result();

	}
	public function delete_temp_member(){
		$data = array (
					'group_name' => $this->input->post('group_name'),
					'member' => $this->input->post('member')
					
		);
		$sql = ('DELETE FROM temp_group_members  WHERE temp_group_members.group_name = ? AND temp_group_members.member = ?');
		$query = $this->db->query($sql, $data);
	}
	public function delete_group_member(){
		$data = array (
					'group_name' => $this->input->post('group_name'),
					'member' => $this->input->post('member')
					
		);
		$sql = ('DELETE FROM group_members  WHERE group_members.group_name = ? AND  group_members.member = ?');
		$query = $this->db->query($sql, $data);
	}
	//personal stats
	public function personal_stats(){
		$data = $this->session->userdata('username');
		$sql = ("SELECT * FROM personal_stats WHERE username = ?");
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	//total
	public function total_stats(){
		$data = $this->session->userdata('username');
		$sql = ("SELECT username, SUM(wins) as wins, SUM(losses) as losses  FROM personal_stats WHERE username = ?");
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	
	

}//close model
