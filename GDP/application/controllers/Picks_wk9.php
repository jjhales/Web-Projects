<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk9 extends CI_Controller {

public function week9(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups9');
		$data['team1'] = $this->matchups9->team1();
		$data['team2'] = $this->matchups9->team2();
		$data['team3'] = $this->matchups9->team3();
		$data['team4'] = $this->matchups9->team4();
		$data['team5'] = $this->matchups9->team5();
		$data['team6'] = $this->matchups9->team6();
		$data['team7'] = $this->matchups9->team7();
		$data['team8'] = $this->matchups9->team8();
		$data['team9'] = $this->matchups9->team9();
		$data['team10'] = $this->matchups9->team10();
		$data['team11'] = $this->matchups9->team11();
		$data['team12'] = $this->matchups9->team12();
		$data['team13'] = $this->matchups9->team13();
		$data['team14'] = $this->matchups9->team14();
		$data['team15'] = $this->matchups9->team15();
		$data['team16'] = $this->matchups9->team16();
		$data['team17'] = $this->matchups9->team17();
		$data['team18'] = $this->matchups9->team18();
		$data['team19'] = $this->matchups9->team19();
		$data['team20'] = $this->matchups9->team20();
		$data['team21'] = $this->matchups9->team21();
		$data['team22'] = $this->matchups9->team22();
		$data['team23'] = $this->matchups9->team23();
		$data['team24'] = $this->matchups9->team24();
		$data['team25'] = $this->matchups9->team25();
		$data['team26'] = $this->matchups9->team26();
		$data['dbpickvalues'] = $this->matchups9->picks_present_9();
		$data['week9_winners'] = $this->matchups9->winner_picks_9();
		
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week9', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week9', $data);
		$this->load->view('templates/footer');
		}
	}
}