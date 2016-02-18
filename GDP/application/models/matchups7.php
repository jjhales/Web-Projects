<?php

class Matchups7 extends CI_Model{
//function to pull week 1 games
public function team1(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 185");
	return $query->result();
}
public function team2(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 186");
	return $query->result();
}
public function team3(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 187");
	return $query->result();
}
public function team4(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 188");
	return $query->result();
}
public function team5(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 189");
	return $query->result();
}
public function team6(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 190");
	return $query->result();
}
public function team7(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 191");
	return $query->result();
}
public function team8(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 192");
	return $query->result();
}
public function team9(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 193");
	return $query->result();
}
public function team10(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 194");
	return $query->result();
}
public function team11(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 195");
	return $query->result();
}
public function team12(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 196");
	return $query->result();
}
public function team13(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 197");
	return $query->result();
}
public function team14(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 198");
	return $query->result();
}
public function team15(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 199");
	return $query->result();
}
public function team16(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 200");
	return $query->result();
}
public function team17(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 201");
	return $query->result();
}
public function team18(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 202");
	return $query->result();
}
public function team19(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 203");
	return $query->result();
}
public function team20(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 204");
	return $query->result();
}
public function team21(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 205");
	return $query->result();
}
public function team22(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 206");
	return $query->result();
}
public function team23(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 207");
	return $query->result();
}
public function team24(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 208");
	return $query->result();
}
public function team25(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 209");
	return $query->result();
}
public function team26(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 210");
	return $query->result();
}
public function team27(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 211");
	return $query->result();
}
public function team28(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 212");
	return $query->result();
}
//query to setup array for picks selected
public function picks_present_7(){
		$userdata = $this->session->userdata('username');

		if ($userdata){
			$sql = 'SELECT username, week_number FROM user_picks WHERE username = ? AND week_number = 7';
			$query = $this->db->query($sql, $userdata);
			$data2 = $query->result();
				if ($data2 > 0){
				$sql2 = 'SELECT * FROM user_picks WHERE username = ? AND week_number = 7';
				$query2 = $this->db->query($sql2, $userdata);
				return $query2->result();
			}
		}
	}
public function winner_picks_7(){
	$query = $this->db->query("SELECT * FROM winners WHERE week_number = 7");
	return $query->result();
}
}//end matchups