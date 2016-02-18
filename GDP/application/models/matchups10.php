<?php

class Matchups10 extends CI_Model{
//function to pull week 10 games
public function team1(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 267");
	return $query->result();
}
public function team2(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 268");
	return $query->result();
}
public function team3(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 269");
	return $query->result();
}
public function team4(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 270");
	return $query->result();
}
public function team5(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 271");
	return $query->result();
}
public function team6(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 272");
	return $query->result();
}
public function team7(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 273");
	return $query->result();
}
public function team8(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 274");
	return $query->result();
}
public function team9(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 275");
	return $query->result();
}
public function team10(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 276");
	return $query->result();
}
public function team11(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 277");
	return $query->result();
}
public function team12(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 278");
	return $query->result();
}
public function team13(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 279");
	return $query->result();
}
public function team14(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 280");
	return $query->result();
}
public function team15(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 281");
	return $query->result();
}
public function team16(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 282");
	return $query->result();
}
public function team17(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 283");
	return $query->result();
}
public function team18(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 284");
	return $query->result();
}
public function team19(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 285");
	return $query->result();
}
public function team20(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 286");
	return $query->result();
}
public function team21(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 287");
	return $query->result();
}
public function team22(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 288");
	return $query->result();
}
public function team23(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 289");
	return $query->result();
}
public function team24(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 290");
	return $query->result();
}
public function team25(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 291");
	return $query->result();
}
public function team26(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 292");
	return $query->result();
}
public function team27(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 293");
	return $query->result();
}
public function team28(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 294");
	return $query->result();
}

//query to setup array for picks selected
public function picks_present_10(){
		$userdata = $this->session->userdata('username');

		if ($userdata){
			$sql = 'SELECT username, week_number FROM user_picks WHERE username = ? AND week_number = 10';
			$query = $this->db->query($sql, $userdata);
			$data2 = $query->result();
				if ($data2 > 0){
				$sql2 = 'SELECT * FROM user_picks WHERE username = ? AND week_number = 10';
				$query2 = $this->db->query($sql2, $userdata);
				return $query2->result();
			}
		}
	}
public function winner_picks_10(){
	$query = $this->db->query("SELECT * FROM winners WHERE week_number = 10");
	return $query->result();
}



}//end matchups