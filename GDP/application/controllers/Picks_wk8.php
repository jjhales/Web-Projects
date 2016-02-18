<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk8 extends CI_Controller {

public function week8(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups8');
		$data['team1'] = $this->matchups8->team1();
		$data['team2'] = $this->matchups8->team2();
		$data['team3'] = $this->matchups8->team3();
		$data['team4'] = $this->matchups8->team4();
		$data['team5'] = $this->matchups8->team5();
		$data['team6'] = $this->matchups8->team6();
		$data['team7'] = $this->matchups8->team7();
		$data['team8'] = $this->matchups8->team8();
		$data['team9'] = $this->matchups8->team9();
		$data['team10'] = $this->matchups8->team10();
		$data['team11'] = $this->matchups8->team11();
		$data['team12'] = $this->matchups8->team12();
		$data['team13'] = $this->matchups8->team13();
		$data['team14'] = $this->matchups8->team14();
		$data['team15'] = $this->matchups8->team15();
		$data['team16'] = $this->matchups8->team16();
		$data['team17'] = $this->matchups8->team17();
		$data['team18'] = $this->matchups8->team18();
		$data['team19'] = $this->matchups8->team19();
		$data['team20'] = $this->matchups8->team20();
		$data['team21'] = $this->matchups8->team21();
		$data['team22'] = $this->matchups8->team22();
		$data['team23'] = $this->matchups8->team23();
		$data['team24'] = $this->matchups8->team24();
		$data['team25'] = $this->matchups8->team25();
		$data['team26'] = $this->matchups8->team26();
		$data['team27'] = $this->matchups8->team27();
		$data['team28'] = $this->matchups8->team28();
		$data['dbpickvalues'] = $this->matchups8->picks_present_8();
		$data['week8_winners'] = $this->matchups8->winner_picks_8();
		
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week8', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week8', $data);
		$this->load->view('templates/footer');
		}
	}
}