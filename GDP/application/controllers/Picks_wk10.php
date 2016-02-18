<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk10 extends CI_Controller {

public function week10(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups10');
		$data['team1'] = $this->matchups10->team1();
		$data['team2'] = $this->matchups10->team2();
		$data['team3'] = $this->matchups10->team3();
		$data['team4'] = $this->matchups10->team4();
		$data['team5'] = $this->matchups10->team5();
		$data['team6'] = $this->matchups10->team6();
		$data['team7'] = $this->matchups10->team7();
		$data['team8'] = $this->matchups10->team8();
		$data['team9'] = $this->matchups10->team9();
		$data['team10'] = $this->matchups10->team10();
		$data['team11'] = $this->matchups10->team11();
		$data['team12'] = $this->matchups10->team12();
		$data['team13'] = $this->matchups10->team13();
		$data['team14'] = $this->matchups10->team14();
		$data['team15'] = $this->matchups10->team15();
		$data['team16'] = $this->matchups10->team16();
		$data['team17'] = $this->matchups10->team17();
		$data['team18'] = $this->matchups10->team18();
		$data['team19'] = $this->matchups10->team19();
		$data['team20'] = $this->matchups10->team20();
		$data['team21'] = $this->matchups10->team21();
		$data['team22'] = $this->matchups10->team22();
		$data['team23'] = $this->matchups10->team23();
		$data['team24'] = $this->matchups10->team24();
		$data['team25'] = $this->matchups10->team25();
		$data['team26'] = $this->matchups10->team26();
		$data['team27'] = $this->matchups10->team27();
		$data['team28'] = $this->matchups10->team28();
		//load data for array to set inputs to selected
		$data['dbpickvalues'] = $this->matchups10->picks_present_10();
		$data['week10_winners'] = $this->matchups10->winner_picks_10();
		
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week10', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week10', $data);
		$this->load->view('templates/footer');
		}
	}
}