<?php

class Matchups12 extends CI_Model{
//function to pull week 1 games
public function team1(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 323");
	return $query->result();
}
public function team2(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 324");
	return $query->result();
}
public function team3(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 325");
	return $query->result();
}
public function team4(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 326");
	return $query->result();
}
public function team5(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 327");
	return $query->result();
}
public function team6(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 328");
	return $query->result();
}
public function team7(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 329");
	return $query->result();
}
public function team8(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 330");
	return $query->result();
}
public function team9(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 331");
	return $query->result();
}
public function team10(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 332");
	return $query->result();
}
public function team11(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 333");
	return $query->result();
}
public function team12(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 334");
	return $query->result();
}
public function team13(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 335");
	return $query->result();
}
public function team14(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 336");
	return $query->result();
}
public function team15(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 337");
	return $query->result();
}
public function team16(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 338");
	return $query->result();
}
public function team17(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 339");
	return $query->result();
}
public function team18(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 340");
	return $query->result();
}
public function team19(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 341");
	return $query->result();
}
public function team20(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 342");
	return $query->result();
}
public function team21(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 343");
	return $query->result();
}
public function team22(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 344");
	return $query->result();
}
public function team23(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 345");
	return $query->result();
}
public function team24(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 346");
	return $query->result();
}
public function team25(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 347");
	return $query->result();
}
public function team26(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 348");
	return $query->result();
}
public function team27(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 349");
	return $query->result();
}
public function team28(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 350");
	return $query->result();
}
public function team29(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 351");
	return $query->result();
}
public function team30(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 352");
	return $query->result();
}
public function team31(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 353");
	return $query->result();
}
public function team32(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 354");
	return $query->result();
}


//query to setup array for picks selected
public function picks_present_12(){
		$userdata = $this->session->userdata('username');

		if ($userdata){
			$sql = 'SELECT username, week_number FROM user_picks WHERE username = ? AND week_number = 12';
			$query = $this->db->query($sql, $userdata);
			$data2 = $query->result();
				if ($data2 > 0){
				$sql2 = 'SELECT * FROM user_picks WHERE username = ? AND week_number = 12';
				$query2 = $this->db->query($sql2, $userdata);
				return $query2->result();
			}
		}
	}
public function winner_picks_12(){
	$query = $this->db->query("SELECT * FROM winners WHERE week_number = 12");
	return $query->result();
}


}//end matchups