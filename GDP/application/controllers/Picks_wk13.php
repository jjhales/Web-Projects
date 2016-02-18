<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk13 extends CI_Controller {

public function week13(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups13');
		$data['team1'] = $this->matchups13->team1();
		$data['team2'] = $this->matchups13->team2();
		$data['team3'] = $this->matchups13->team3();
		$data['team4'] = $this->matchups13->team4();
		$data['team5'] = $this->matchups13->team5();
		$data['team6'] = $this->matchups13->team6();
		$data['team7'] = $this->matchups13->team7();
		$data['team8'] = $this->matchups13->team8();
		$data['team9'] = $this->matchups13->team9();
		$data['team10'] = $this->matchups13->team10();
		$data['team11'] = $this->matchups13->team11();
		$data['team12'] = $this->matchups13->team12();
		$data['team13'] = $this->matchups13->team13();
		$data['team14'] = $this->matchups13->team14();
		$data['team15'] = $this->matchups13->team15();
		$data['team16'] = $this->matchups13->team16();
		$data['team17'] = $this->matchups13->team17();
		$data['team18'] = $this->matchups13->team18();
		$data['team19'] = $this->matchups13->team19();
		$data['team20'] = $this->matchups13->team20();
		$data['team21'] = $this->matchups13->team21();
		$data['team22'] = $this->matchups13->team22();
		$data['team23'] = $this->matchups13->team23();
		$data['team24'] = $this->matchups13->team24();
		$data['team25'] = $this->matchups13->team25();
		$data['team26'] = $this->matchups13->team26();
		$data['team27'] = $this->matchups13->team27();
		$data['team28'] = $this->matchups13->team28();
		$data['team29'] = $this->matchups13->team29();
		$data['team30'] = $this->matchups13->team30();
		$data['team31'] = $this->matchups13->team31();
		$data['team32'] = $this->matchups13->team32();
		$data['dbpickvalues'] = $this->matchups13->picks_present_13();
		$data['week13_winners'] = $this->matchups13->winner_picks_13();
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week13', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week13', $data);
		$this->load->view('templates/footer');
		}
	}
}