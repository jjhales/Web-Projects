<?php

class Matchups15 extends CI_Model{
//function to pull week 1 games
public function team1(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 419");
	return $query->result();
}
public function team2(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 420");
	return $query->result();
}
public function team3(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 421");
	return $query->result();
}
public function team4(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 422");
	return $query->result();
}
public function team5(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 423");
	return $query->result();
}
public function team6(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 424");
	return $query->result();
}
public function team7(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 425");
	return $query->result();
}
public function team8(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 426");
	return $query->result();
}
public function team9(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 427");
	return $query->result();
}
public function team10(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 428");
	return $query->result();
}
public function team11(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 429");
	return $query->result();
}
public function team12(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 430");
	return $query->result();
}
public function team13(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 431");
	return $query->result();
}
public function team14(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 432");
	return $query->result();
}
public function team15(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 433");
	return $query->result();
}
public function team16(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 434");
	return $query->result();
}
public function team17(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 435");
	return $query->result();
}
public function team18(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 436");
	return $query->result();
}
public function team19(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 437");
	return $query->result();
}
public function team20(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 438");
	return $query->result();
}
public function team21(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 439");
	return $query->result();
}
public function team22(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 440");
	return $query->result();
}
public function team23(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 441");
	return $query->result();
}
public function team24(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 442");
	return $query->result();
}
public function team25(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 443");
	return $query->result();
}
public function team26(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 444");
	return $query->result();
}
public function team27(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 445");
	return $query->result();
}
public function team28(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 446");
	return $query->result();
}
public function team29(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 447");
	return $query->result();
}
public function team30(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 448");
	return $query->result();
}
public function team31(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 449");
	return $query->result();
}
public function team32(){
	$query = $this->db->query("SELECT games.game_id, games.team_info, teams.team_location, teams.team_name, teams.team_logo, games.play_time, games.play_date FROM games JOIN teams on teams.team_id = games.team_info WHERE game = 450");
	return $query->result();
}
//query to setup array for picks selected
public function picks_present_15(){
		$userdata = $this->session->userdata('username');

		if ($userdata){
			$sql = 'SELECT username, week_number FROM user_picks WHERE username = ? AND week_number = 15';
			$query = $this->db->query($sql, $userdata);
			$data2 = $query->result();
				if ($data2 > 0){
				$sql2 = 'SELECT * FROM user_picks WHERE username = ? AND week_number = 15';
				$query2 = $this->db->query($sql2, $userdata);
				return $query2->result();
			}
		}
	}

public function winner_picks_15(){
	$query = $this->db->query("SELECT * FROM winners WHERE week_number = 15");
	return $query->result();
}


}//end matchups