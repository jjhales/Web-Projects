<?php

class Matchups11 extends CI_Model{
//function to pull week 1 games
public function team1(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 295");
	return $query->result();
}
public function team2(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 296");
	return $query->result();
}
public function team3(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 297");
	return $query->result();
}
public function team4(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 298");
	return $query->result();
}
public function team5(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 299");
	return $query->result();
}
public function team6(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 300");
	return $query->result();
}
public function team7(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 301");
	return $query->result();
}
public function team8(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 302");
	return $query->result();
}
public function team9(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 303");
	return $query->result();
}
public function team10(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 304");
	return $query->result();
}
public function team11(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 305");
	return $query->result();
}
public function team12(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 306");
	return $query->result();
}
public function team13(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 307");
	return $query->result();
}
public function team14(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 308");
	return $query->result();
}
public function team15(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 309");
	return $query->result();
}
public function team16(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 310");
	return $query->result();
}
public function team17(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 311");
	return $query->result();
}
public function team18(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 312");
	return $query->result();
}
public function team19(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 313");
	return $query->result();
}
public function team20(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 314");
	return $query->result();
}
public function team21(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 315");
	return $query->result();
}
public function team22(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 316");
	return $query->result();
}
public function team23(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 317");
	return $query->result();
}
public function team24(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 318");
	return $query->result();
}
public function team25(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 319");
	return $query->result();
}
public function team26(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 320");
	return $query->result();
}
public function team27(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 321");
	return $query->result();
}
public function team28(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 322");
	return $query->result();
}

//query to setup array for picks selected
public function picks_present_11(){
		$userdata = $this->session->userdata('username');

		if ($userdata){
			$sql = 'SELECT username, week_number FROM user_picks WHERE username = ? AND week_number = 11';
			$query = $this->db->query($sql, $userdata);
			$data2 = $query->result();
				if ($data2 > 0){
				$sql2 = 'SELECT * FROM user_picks WHERE username = ? AND week_number = 11';
				$query2 = $this->db->query($sql2, $userdata);
				return $query2->result();
			}
		}
	}
public function winner_picks_11(){
	$query = $this->db->query("SELECT * FROM winners WHERE week_number = 11");
	return $query->result();
}

}//end matchups